<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Capacity
 * @property string $Description
 * @property string $Id
 * @property string $Name
 * @property string $Arn
 * @property list<AwsWafv2RulesDetails> $Rules
 * @property string $Scope
 * @property AwsWafv2VisibilityConfigDetails $VisibilityConfig
 */
class AwsWafv2RuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     Capacity?: int,
     *     Description?: string,
     *     Id?: string,
     *     Name?: string,
     *     Arn?: string,
     *     Rules?: list<AwsWafv2RulesDetails>,
     *     Scope?: string,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
