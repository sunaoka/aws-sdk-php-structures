<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FromPort
 * @property int|null $ToPort
 */
class RuleGroupSourceStatelessRuleMatchAttributesSourcePorts extends Shape
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
