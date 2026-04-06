<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int|null $lastModifiedDate
 * @property string|null $name
 * @property list<string>|null $securityGroupIds
 * @property 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null $status
 * @property list<string>|null $subnetIds
 */
class UpdateVpcEndpointDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     lastModifiedDate?: int|null,
     *     name?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'PENDING'|'DELETING'|'ACTIVE'|'FAILED'|null,
     *     subnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
