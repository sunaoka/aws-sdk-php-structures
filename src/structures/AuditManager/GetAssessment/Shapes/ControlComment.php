<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorName
 * @property string $commentBody
 * @property \Aws\Api\DateTimeResult $postedDate
 */
class ControlComment extends Shape
{
    /**
     * @param array{
     *     authorName?: string,
     *     commentBody?: string,
     *     postedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
