<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SegmentDefinitionName
 * @property string $DisplayName
 * @property string $Description
 * @property string $SegmentDefinitionArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property array<string, string> $Tags
 */
class SegmentDefinitionItem extends Shape
{
    /**
     * @param array{
     *     SegmentDefinitionName?: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     SegmentDefinitionArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
