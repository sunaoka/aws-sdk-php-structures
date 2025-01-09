<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'REGISTRY'|'REGISTRY_AND_SHADOW' $thingIndexingMode
 * @property 'OFF'|'STATUS' $thingConnectivityIndexingMode
 * @property 'OFF'|'VIOLATIONS' $deviceDefenderIndexingMode
 * @property 'OFF'|'ON' $namedShadowIndexingMode
 * @property list<Field> $managedFields
 * @property list<Field> $customFields
 * @property IndexingFilter $filter
 */
class ThingIndexingConfiguration extends Shape
{
    /**
     * @param array{
     *     thingIndexingMode: 'OFF'|'REGISTRY'|'REGISTRY_AND_SHADOW',
     *     thingConnectivityIndexingMode?: 'OFF'|'STATUS',
     *     deviceDefenderIndexingMode?: 'OFF'|'VIOLATIONS',
     *     namedShadowIndexingMode?: 'OFF'|'ON',
     *     managedFields?: list<Field>,
     *     customFields?: list<Field>,
     *     filter?: IndexingFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
