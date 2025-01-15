<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FromPort
 * @property int|null $ToPort
 */
class RuleGroupSourceStatelessRuleMatchAttributesDestinationPorts extends Shape
{
    /**
     * @param array{
     *     FromPort?: int|null,
     *     ToPort?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
