<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'CBOR' $outputFormat
 */
class AwsJsonSubstitutionCommandPreprocessorConfig extends Shape
{
    /**
     * @param array{outputFormat: 'JSON'|'CBOR'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
