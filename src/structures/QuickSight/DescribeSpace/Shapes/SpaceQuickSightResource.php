<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'SPACE'|'ACTION_CONNECTOR'|'DATA_SET'|'ARTIFACT' $resourceType
 * @property SpaceQuickSightResourceDetails $resourceDetails
 */
class SpaceQuickSightResource extends Shape
{
    /**
     * @param array{
     *     resourceType: 'TOPIC'|'DASHBOARD'|'KNOWLEDGE_BASE'|'SPACE'|'ACTION_CONNECTOR'|'DATA_SET'|'ARTIFACT',
     *     resourceDetails: SpaceQuickSightResourceDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
