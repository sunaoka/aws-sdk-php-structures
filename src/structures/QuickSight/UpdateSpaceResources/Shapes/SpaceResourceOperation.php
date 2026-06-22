<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpaceResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'ACTION_CONNECTOR'|'DATA_SET' $ResourceType
 * @property SpaceQuickSightResourceDetails $ResourceDetails
 */
class SpaceResourceOperation extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'ACTION_CONNECTOR'|'DATA_SET',
     *     ResourceDetails: SpaceQuickSightResourceDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
