<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $baseCapacity
 * @property list<Shapes\ConfigParameter>|null $configParameters
 * @property bool|null $enhancedVpcRouting
 * @property string|null $ipAddressType
 * @property int|null $maxCapacity
 * @property int|null $port
 * @property Shapes\PerformanceTarget|null $pricePerformanceTarget
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
     *     ipAddressType?: string|null,
     *     maxCapacity?: int|null,
     *     port?: int|null,
     *     pricePerformanceTarget?: Shapes\PerformanceTarget|null,
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
