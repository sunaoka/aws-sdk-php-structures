<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessmentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Action
 * @property string|null $DocumentationUrl
 */
class FindingRemediation extends Shape
{
    /**
     * @param array{
     *     Action?: string|null,
     *     DocumentationUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
