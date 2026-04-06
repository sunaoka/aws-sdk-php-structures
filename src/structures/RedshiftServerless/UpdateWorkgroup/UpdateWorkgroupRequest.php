<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $baseCapacity
 * @property list<Shapes\ConfigParameter>|null $configParameters
 * @property bool|null $enhancedVpcRouting
 * @property int|null $port
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property string $workgroupName
 */
class UpdateWorkgroupRequest extends Request
{
    /**
     * @param array{
     *     baseCapacity?: int|null,
     *     configParameters?: list<Shapes\ConfigParameter>|null,
     *     enhancedVpcRouting?: bool|null,
     *     port?: int|null,
     *     publiclyAccessible?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
