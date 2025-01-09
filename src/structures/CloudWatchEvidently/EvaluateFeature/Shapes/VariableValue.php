<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\EvaluateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $boolValue
 * @property double $doubleValue
 * @property int<-9007199254740991, 9007199254740991> $longValue
 * @property string $stringValue
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     boolValue?: bool,
     *     doubleValue?: double,
     *     longValue?: int<-9007199254740991, 9007199254740991>,
     *     stringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
