<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $keyName
 * @property 'string'|'boolean'|'int'|'double'|'long' $valueType
 * @property string $defaultValue
 * @property list<string>|null $supportedValues
 * @property double|null $minValue
 * @property double|null $maxValue
 */
class DeliverySourceConfigurationSchema extends Shape
{
    /**
     * @param array{
     *     keyName: string,
     *     valueType: 'string'|'boolean'|'int'|'double'|'long',
     *     defaultValue: string,
     *     supportedValues?: list<string>|null,
     *     minValue?: double|null,
     *     maxValue?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
