<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultAction
 * @property string $MetricName
 * @property string $Name
 * @property list<AwsWafRegionalWebAclRulesListDetails> $RulesList
 * @property string $WebAclId
 */
class AwsWafRegionalWebAclDetails extends Shape
{
    /**
     * @param array{
     *     DefaultAction?: string,
     *     MetricName?: string,
     *     Name?: string,
     *     RulesList?: list<AwsWafRegionalWebAclRulesListDetails>,
     *     WebAclId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
