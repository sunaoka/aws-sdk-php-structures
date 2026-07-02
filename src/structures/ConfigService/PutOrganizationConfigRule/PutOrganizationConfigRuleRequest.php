<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConfigRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConfigRuleName
 * @property Shapes\OrganizationManagedRuleMetadata|null $OrganizationManagedRuleMetadata
 * @property Shapes\OrganizationCustomRuleMetadata|null $OrganizationCustomRuleMetadata
 * @property list<string>|null $ExcludedAccounts
 * @property Shapes\OrganizationCustomPolicyRuleMetadata|null $OrganizationCustomPolicyRuleMetadata
 * @property list<Shapes\Tag>|null $Tags
 */
class PutOrganizationConfigRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     OrganizationManagedRuleMetadata?: Shapes\OrganizationManagedRuleMetadata|null,
     *     OrganizationCustomRuleMetadata?: Shapes\OrganizationCustomRuleMetadata|null,
     *     ExcludedAccounts?: list<string>|null,
     *     OrganizationCustomPolicyRuleMetadata?: Shapes\OrganizationCustomPolicyRuleMetadata|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
