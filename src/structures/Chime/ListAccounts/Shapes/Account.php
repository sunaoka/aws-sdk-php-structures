<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property string $AccountId
 * @property string $Name
 * @property 'Team'|'EnterpriseDirectory'|'EnterpriseLWA'|'EnterpriseOIDC' $AccountType
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'Basic'|'Plus'|'Pro'|'ProTrial' $DefaultLicense
 * @property list<'Basic'|'Plus'|'Pro'|'ProTrial'> $SupportedLicenses
 * @property 'Suspended'|'Active' $AccountStatus
 * @property list<SigninDelegateGroup> $SigninDelegateGroups
 */
class Account extends Shape
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AccountId: string,
     *     Name: string,
     *     AccountType?: 'Team'|'EnterpriseDirectory'|'EnterpriseLWA'|'EnterpriseOIDC',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     DefaultLicense?: 'Basic'|'Plus'|'Pro'|'ProTrial',
     *     SupportedLicenses?: list<'Basic'|'Plus'|'Pro'|'ProTrial'>,
     *     AccountStatus?: 'Suspended'|'Active',
     *     SigninDelegateGroups?: list<SigninDelegateGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
