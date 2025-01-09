<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INBOUND'|'OUTBOUND' $capabilityDirection
 * @property EdiType $type
 * @property S3Location $inputLocation
 * @property S3Location $outputLocation
 * @property string $transformerId
 */
class EdiConfiguration extends Shape
{
    /**
     * @param array{
     *     capabilityDirection?: 'INBOUND'|'OUTBOUND',
     *     type: EdiType,
     *     inputLocation: S3Location,
     *     outputLocation: S3Location,
     *     transformerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
