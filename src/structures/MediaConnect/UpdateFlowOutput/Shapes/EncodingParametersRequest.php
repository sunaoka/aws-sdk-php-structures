<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $CompressionFactor
 * @property 'main'|'high' $EncoderProfile
 */
class EncodingParametersRequest extends Shape
{
    /**
     * @param array{
     *     CompressionFactor: double,
     *     EncoderProfile: 'main'|'high'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
