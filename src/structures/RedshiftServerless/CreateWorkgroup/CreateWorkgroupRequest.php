<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $baseCapacity
 * @property list<Shapes\ConfigParameter> $configParameters
 * @property bool $enhancedVpcRouting
 * @property string $ipAddressType
 * @property int $maxCapacity
 * @property string $namespaceName
 * @property int $port
 * @property Shapes\PerformanceTarget $pricePerformanceTarget
 * @property bool $publiclyAccessible
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property list<Shapes\Tag> $tags
 * @property string $workgroupName
 */
class CreateWorkgroupRequest extends Request
{
    /**
     * @param array{
     *     baseCapacity?: int,
     *     configParameters?: list<Shapes\ConfigParameter>,
     *     enhancedVpcRouting?: bool,
     *     ipAddressType?: string,
     *     maxCapacity?: int,
     *     namespaceName: string,
     *     port?: int,
     *     pricePerformanceTarget?: Shapes\PerformanceTarget,
     *     publiclyAccessible?: bool,
     *     securityGroupIds?: list<string>,
     *     subnetIds?: list<string>,
     *     tags?: list<Shapes\Tag>,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
