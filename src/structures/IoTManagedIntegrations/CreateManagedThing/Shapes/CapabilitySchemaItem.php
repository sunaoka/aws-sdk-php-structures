<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateManagedThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS'|'ZCL'|'CONNECTOR' $Format
 * @property string $CapabilityId
 * @property string $ExtrinsicId
 * @property int<1, 10> $ExtrinsicVersion
 * @property ValidationSchema $Schema
 */
class CapabilitySchemaItem extends Shape
{
    /**
     * @param array{
     *     Format: 'AWS'|'ZCL'|'CONNECTOR',
     *     CapabilityId: string,
     *     ExtrinsicId: string,
     *     ExtrinsicVersion: int<1, 10>,
     *     Schema: ValidationSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
