<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListSegmentDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SegmentDefinitionName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $SegmentDefinitionArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property array<string, string>|null $Tags
 * @property 'CLASSIC'|'ENHANCED'|null $SegmentType
 */
class SegmentDefinitionItem extends Shape
{
    /**
     * @param array{
     *     SegmentDefinitionName?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     SegmentDefinitionArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null,
     *     SegmentType?: 'CLASSIC'|'ENHANCED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
