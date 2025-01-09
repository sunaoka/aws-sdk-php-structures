<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRateBasedStatementManagedKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $WebACLName
 * @property string $WebACLId
 * @property string $RuleGroupRuleName
 * @property string $RuleName
 */
class GetRateBasedStatementManagedKeysRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     WebACLName: string,
     *     WebACLId: string,
     *     RuleGroupRuleName?: string,
     *     RuleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
