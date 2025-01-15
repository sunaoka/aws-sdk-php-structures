<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $createdDate
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property string|null $name
 * @property list<string>|null $securityGroupIds
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class VpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     createdDate?: int|null,
     *     failureCode?: string|null,
     *     failureMessage?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     subnetIds?: list<string>|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
