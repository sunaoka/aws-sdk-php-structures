<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $baseCapacity
 * @property list<Shapes\ConfigParameter>|null $configParameters
 * @property bool|null $enhancedVpcRouting
 * @property bool|null $extraComputeForAutomaticOptimization
 * @property string|null $ipAddressType
 * @property int|null $maxCapacity
 * @property string $namespaceName
 * @property int|null $port
 * @property Shapes\PerformanceTarget|null $pricePerformanceTarget
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $securityGroupIds
 * @property list<string>|null $subnetIds
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $trackName
 * @property string $workgroupName
 */
class CreateWorkgroupRequest extends Request
{
    /**
     * @param array{
     *     baseCapacity?: int|null,
     *     configParameters?: list<Shapes\ConfigParameter>|null,
     *     enhancedVpcRouting?: bool|null,
     *     extraComputeForAutomaticOptimization?: bool|null,
     *     ipAddressType?: string|null,
     *     maxCapacity?: int|null,
     *     namespaceName: string,
     *     port?: int|null,
     *     pricePerformanceTarget?: Shapes\PerformanceTarget|null,
     *     publiclyAccessible?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     trackName?: string|null,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
