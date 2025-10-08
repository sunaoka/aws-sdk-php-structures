<?php

namespace Sunaoka\Aws\Structures\Evs\DisassociateEipFromVlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $vlanId
 * @property string|null $cidr
 * @property string|null $availabilityZone
 * @property string|null $functionName
 * @property string|null $subnetId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null $vlanState
 * @property string|null $stateDetails
 * @property list<EipAssociation>|null $eipAssociations
 * @property bool|null $isPublic
 * @property string|null $networkAclId
 */
class Vlan extends Shape
{
    /**
     * @param array{
     *     vlanId?: int|null,
     *     cidr?: string|null,
     *     availabilityZone?: string|null,
     *     functionName?: string|null,
     *     subnetId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     vlanState?: 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null,
     *     stateDetails?: string|null,
     *     eipAssociations?: list<EipAssociation>|null,
     *     isPublic?: bool|null,
     *     networkAclId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
