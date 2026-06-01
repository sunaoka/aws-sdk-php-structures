<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListSpaceResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'SPACE'|'ACTION_CONNECTOR'|'DATA_SET'|'ARTIFACT' $ResourceType
 * @property SpaceQuickSightResourceDetails $ResourceDetails
 * @property string|null $ResourceName
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class SpaceResourceSummary extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'SPACE'|'ACTION_CONNECTOR'|'DATA_SET'|'ARTIFACT',
     *     ResourceDetails: SpaceQuickSightResourceDetails,
     *     ResourceName?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
