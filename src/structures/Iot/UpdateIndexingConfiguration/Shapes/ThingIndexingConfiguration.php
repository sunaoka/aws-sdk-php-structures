<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'REGISTRY'|'REGISTRY_AND_SHADOW' $thingIndexingMode
 * @property 'OFF'|'STATUS'|null $thingConnectivityIndexingMode
 * @property 'OFF'|'VIOLATIONS'|null $deviceDefenderIndexingMode
 * @property 'OFF'|'ON'|null $namedShadowIndexingMode
 * @property list<Field>|null $managedFields
 * @property list<Field>|null $customFields
 * @property IndexingFilter|null $filter
 */
class ThingIndexingConfiguration extends Shape
{
    /**
     * @param array{
     *     thingIndexingMode: 'OFF'|'REGISTRY'|'REGISTRY_AND_SHADOW',
     *     thingConnectivityIndexingMode?: 'OFF'|'STATUS'|null,
     *     deviceDefenderIndexingMode?: 'OFF'|'VIOLATIONS'|null,
     *     namedShadowIndexingMode?: 'OFF'|'ON'|null,
     *     managedFields?: list<Field>|null,
     *     customFields?: list<Field>|null,
     *     filter?: IndexingFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
