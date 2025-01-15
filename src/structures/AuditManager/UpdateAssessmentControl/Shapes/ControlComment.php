<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorName
 * @property string|null $commentBody
 * @property \Aws\Api\DateTimeResult|null $postedDate
 */
class ControlComment extends Shape
{
    /**
     * @param array{
     *     authorName?: string|null,
     *     commentBody?: string|null,
     *     postedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
