<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConfigRuleName
 * @property string $OrganizationConfigRuleArn
 * @property OrganizationManagedRuleMetadata $OrganizationManagedRuleMetadata
 * @property OrganizationCustomRuleMetadata $OrganizationCustomRuleMetadata
 * @property list<string> $ExcludedAccounts
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property OrganizationCustomPolicyRuleMetadataNoPolicy $OrganizationCustomPolicyRuleMetadata
 */
class OrganizationConfigRule extends Shape
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     OrganizationConfigRuleArn: string,
     *     OrganizationManagedRuleMetadata?: OrganizationManagedRuleMetadata,
     *     OrganizationCustomRuleMetadata?: OrganizationCustomRuleMetadata,
     *     ExcludedAccounts?: list<string>,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     OrganizationCustomPolicyRuleMetadata?: OrganizationCustomPolicyRuleMetadataNoPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
