<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConfigRuleName
 * @property string $OrganizationConfigRuleArn
 * @property OrganizationManagedRuleMetadata|null $OrganizationManagedRuleMetadata
 * @property OrganizationCustomRuleMetadata|null $OrganizationCustomRuleMetadata
 * @property list<string>|null $ExcludedAccounts
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property OrganizationCustomPolicyRuleMetadataNoPolicy|null $OrganizationCustomPolicyRuleMetadata
 */
class OrganizationConfigRule extends Shape
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     OrganizationConfigRuleArn: string,
     *     OrganizationManagedRuleMetadata?: OrganizationManagedRuleMetadata|null,
     *     OrganizationCustomRuleMetadata?: OrganizationCustomRuleMetadata|null,
     *     ExcludedAccounts?: list<string>|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     OrganizationCustomPolicyRuleMetadata?: OrganizationCustomPolicyRuleMetadataNoPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
