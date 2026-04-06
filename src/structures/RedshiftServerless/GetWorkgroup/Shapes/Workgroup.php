<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetWorkgroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $baseCapacity
 * @property list<ConfigParameter>|null $configParameters
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property Endpoint|null $endpoint
 * @property bool|null $enhancedVpcRouting
 * @property string|null $namespaceName
 * @property int|null $port
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $securityGroupIds
 * @property 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $workgroupArn
 * @property string|null $workgroupId
 * @property string|null $workgroupName
 */
class Workgroup extends Shape
{
    /**
     * @param array{
     *     baseCapacity?: int|null,
     *     configParameters?: list<ConfigParameter>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     endpoint?: Endpoint|null,
     *     enhancedVpcRouting?: bool|null,
     *     namespaceName?: string|null,
     *     port?: int|null,
     *     publiclyAccessible?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING'|null,
     *     subnetIds?: list<string>|null,
     *     workgroupArn?: string|null,
     *     workgroupId?: string|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
