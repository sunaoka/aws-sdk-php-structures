<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL' $associationType
 * @property string $programManagementAccountIdentifier
 * @property string $associatedAccountId
 * @property string $displayName
 * @property 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null $resaleAccountModel
 * @property 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION' $sector
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\SupportPlan|null $requestedSupportPlan
 */
class CreateRelationshipRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     associationType: 'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL',
     *     programManagementAccountIdentifier: string,
     *     associatedAccountId: string,
     *     displayName: string,
     *     resaleAccountModel?: 'DISTRIBUTOR'|'END_CUSTOMER'|'SOLUTION_PROVIDER'|null,
     *     sector: 'COMMERCIAL'|'GOVERNMENT'|'GOVERNMENT_EXCEPTION',
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     requestedSupportPlan?: Shapes\SupportPlan|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
