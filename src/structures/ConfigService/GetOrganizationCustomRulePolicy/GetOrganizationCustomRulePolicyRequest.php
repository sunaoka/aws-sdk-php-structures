<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationCustomRulePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 */
class GetOrganizationCustomRulePolicyRequest extends Request
{
    /**
     * @param array{OrganizationConfigRuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
