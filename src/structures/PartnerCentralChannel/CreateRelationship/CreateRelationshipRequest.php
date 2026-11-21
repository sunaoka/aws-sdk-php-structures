<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|'MANAGED_SERVICES_END_CUSTOMER' $associationType
 * @property string $programManagementAccountIdentifier
 * @property string|null $associatedAccountId
 * @property string $displayName
 * @property 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null $resaleAccountModel
 * @property 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION' $sector
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\SupportPlan|null $requestedSupportPlan
 * @property 'ENTIRE_ORGANIZATION'|'SPECIFIC_MEMBER_ACCOUNTS'|null $accountScope
 * @property \Aws\Api\DateTimeResult|null $startDate
 */
class CreateRelationshipRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     associationType: 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'|'MANAGED_SERVICES_END_CUSTOMER',
     *     programManagementAccountIdentifier: string,
     *     associatedAccountId?: string|null,
     *     displayName: string,
     *     resaleAccountModel?: 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null,
     *     sector: 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION',
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     requestedSupportPlan?: Shapes\SupportPlan|null,
     *     accountScope?: 'ENTIRE_ORGANIZATION'|'SPECIFIC_MEMBER_ACCOUNTS'|null,
     *     startDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
