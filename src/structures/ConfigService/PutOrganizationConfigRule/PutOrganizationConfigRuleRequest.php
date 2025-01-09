<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 * @property Shapes\OrganizationManagedRuleMetadata $OrganizationManagedRuleMetadata
 * @property Shapes\OrganizationCustomRuleMetadata $OrganizationCustomRuleMetadata
 * @property list<string> $ExcludedAccounts
 * @property Shapes\OrganizationCustomPolicyRuleMetadata $OrganizationCustomPolicyRuleMetadata
 */
class PutOrganizationConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     OrganizationManagedRuleMetadata?: Shapes\OrganizationManagedRuleMetadata,
     *     OrganizationCustomRuleMetadata?: Shapes\OrganizationCustomRuleMetadata,
     *     ExcludedAccounts?: list<string>,
     *     OrganizationCustomPolicyRuleMetadata?: Shapes\OrganizationCustomPolicyRuleMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
