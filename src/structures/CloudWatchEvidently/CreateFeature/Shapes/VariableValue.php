<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateFeature\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $boolValue
 * @property double $doubleValue
 * @property int $longValue
 * @property string $stringValue
 */
class VariableValue extends Shape
{
    /**
     * @param array{
     *     boolValue?: bool,
     *     doubleValue?: double,
     *     longValue?: int,
     *     stringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
