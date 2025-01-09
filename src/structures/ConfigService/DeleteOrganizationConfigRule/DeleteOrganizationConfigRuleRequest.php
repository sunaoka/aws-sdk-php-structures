<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteOrganizationConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 */
class DeleteOrganizationConfigRuleRequest extends Request
{
    /**
     * @param array{OrganizationConfigRuleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
