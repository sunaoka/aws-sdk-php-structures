<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int $lastModifiedDate
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property list<string> $subnetIds
 */
class UpdateVpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     securityGroupIds?: list<string>,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED',
     *     subnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
