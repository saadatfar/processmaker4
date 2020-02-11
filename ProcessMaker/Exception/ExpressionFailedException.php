<?php

namespace ProcessMaker\Exception;

use Exception;
use Throwable;

/**
 * Thrown if an expression failed to be evaluated
 *
 * @package ProcessMaker\Exceptions
 */

class ExpressionFailedException extends Exception
{

    /**
     * @param Throwable $previous
     */
    public function __construct(Throwable $previous)
    {
        parent::__construct(__('Failed to evaluate expression. :error', ['error' => $previous->getMessage()]), 0, $previous);
    }
}
