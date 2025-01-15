<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $boolValue
 * @property double|null $doubleValue
 * @property int<-9007199254740991, 9007199254740991>|null $longValue
 * @property string|null $stringValue
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     boolValue?: bool|null,
     *     doubleValue?: double|null,
     *     longValue?: int<-9007199254740991, 9007199254740991>|null,
     *     stringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
