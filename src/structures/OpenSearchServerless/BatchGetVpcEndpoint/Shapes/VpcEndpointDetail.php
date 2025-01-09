<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class VpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     failureCode?: string,
     *     failureMessage?: string,
     *     id?: string,
     *     name?: string,
     *     securityGroupIds?: list<string>,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED',
     *     subnetIds?: list<string>,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
