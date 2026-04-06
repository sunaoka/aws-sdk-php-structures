<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOnlineEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property double|null $doubleValue
 * @property bool|null $booleanValue
 */
class FilterValue extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     doubleValue?: double|null,
     *     booleanValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
