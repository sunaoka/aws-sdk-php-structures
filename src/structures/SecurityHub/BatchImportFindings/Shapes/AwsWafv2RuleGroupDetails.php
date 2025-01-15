<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Capacity
 * @property string|null $Description
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Arn
 * @property list<AwsWafv2RulesDetails>|null $Rules
 * @property string|null $Scope
 * @property AwsWafv2VisibilityConfigDetails|null $VisibilityConfig
 */
class AwsWafv2RuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     Capacity?: int|null,
     *     Description?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Rules?: list<AwsWafv2RulesDetails>|null,
     *     Scope?: string|null,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
