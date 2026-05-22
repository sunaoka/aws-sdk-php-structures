<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED' $status
 * @property string|null $securityGroupId
 * @property list<string>|null $glueConnectionNames
 */
class VpcPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     status: 'CREATING'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|'READY'|'UPDATING'|'UPDATE_FAILED'|'DELETED',
     *     securityGroupId?: string|null,
     *     glueConnectionNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
