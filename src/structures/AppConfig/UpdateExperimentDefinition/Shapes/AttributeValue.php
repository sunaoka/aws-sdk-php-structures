<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StringValue
 * @property double|null $NumberValue
 * @property bool|null $BooleanValue
 * @property list<string>|null $StringArray
 * @property list<double>|null $NumberArray
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     StringValue?: string|null,
     *     NumberValue?: double|null,
     *     BooleanValue?: bool|null,
     *     StringArray?: list<string>|null,
     *     NumberArray?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
