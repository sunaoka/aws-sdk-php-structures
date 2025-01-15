<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupVariablesIpSetsDetails|null $IpSets
 * @property RuleGroupVariablesPortSetsDetails|null $PortSets
 */
class RuleGroupVariables extends Shape
{
    /**
     * @param array{
     *     IpSets?: RuleGroupVariablesIpSetsDetails|null,
     *     PortSets?: RuleGroupVariablesPortSetsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
