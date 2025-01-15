<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property string $AccountId
 * @property string $Name
 * @property 'Team'|'EnterpriseDirectory'|'EnterpriseLWA'|'EnterpriseOIDC'|null $AccountType
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial'|null $DefaultLicense
 * @property list<'Basic'|'Plus'|'Pro'|'ProTrial'>|null $SupportedLicenses
 * @property 'Suspended'|'Active'|null $AccountStatus
 * @property list<SigninDelegateGroup>|null $SigninDelegateGroups
 */
class Account extends Shape
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AccountId: string,
     *     Name: string,
     *     AccountType?: 'Team'|'EnterpriseDirectory'|'EnterpriseLWA'|'EnterpriseOIDC'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DefaultLicense?: 'Basic'|'Plus'|'Pro'|'ProTrial'|null,
     *     SupportedLicenses?: list<'Basic'|'Plus'|'Pro'|'ProTrial'>|null,
     *     AccountStatus?: 'Suspended'|'Active'|null,
     *     SigninDelegateGroups?: list<SigninDelegateGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
