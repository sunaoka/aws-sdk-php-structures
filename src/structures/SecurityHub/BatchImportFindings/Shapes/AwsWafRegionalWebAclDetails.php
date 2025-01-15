<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultAction
 * @property string|null $MetricName
 * @property string|null $Name
 * @property list<AwsWafRegionalWebAclRulesListDetails>|null $RulesList
 * @property string|null $WebAclId
 */
class AwsWafRegionalWebAclDetails extends Shape
{
    /**
     * @param array{
     *     DefaultAction?: string|null,
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     RulesList?: list<AwsWafRegionalWebAclRulesListDetails>|null,
     *     WebAclId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
