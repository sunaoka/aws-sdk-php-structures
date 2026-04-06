<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property int|null $lastModifiedDate
 */
class UpdateVpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     lastModifiedDate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
