<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLIENT_ERROR'|'INTERNAL_ERROR'|'STOPPED_BY_USER'|null $code
 * @property string|null $message
 */
class ErrorInformation extends Shape
{
    /**
     * @param array{
     *     code?: 'CLIENT_ERROR'|'INTERNAL_ERROR'|'STOPPED_BY_USER'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
