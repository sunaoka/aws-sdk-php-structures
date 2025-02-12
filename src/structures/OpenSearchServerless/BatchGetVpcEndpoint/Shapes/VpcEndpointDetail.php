<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property int|null $createdDate
 * @property string|null $failureCode
 * @property string|null $failureMessage
 */
class VpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     createdDate?: int|null,
     *     failureCode?: string|null,
     *     failureMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
