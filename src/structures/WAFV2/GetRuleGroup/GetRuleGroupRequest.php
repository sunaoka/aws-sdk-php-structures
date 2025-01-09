<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $ARN
 */
class GetRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     Scope?: 'CLOUDFRONT'|'REGIONAL',
     *     Id?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
