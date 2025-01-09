<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupVariablesIpSetsDetails $IpSets
 * @property RuleGroupVariablesPortSetsDetails $PortSets
 */
class RuleGroupVariables extends Shape
{
    /**
     * @param array{
     *     IpSets?: RuleGroupVariablesIpSetsDetails,
     *     PortSets?: RuleGroupVariablesPortSetsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
