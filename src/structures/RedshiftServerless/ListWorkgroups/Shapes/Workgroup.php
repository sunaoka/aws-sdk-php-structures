<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListWorkgroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $baseCapacity
 * @property list<ConfigParameter> $configParameters
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property list<string> $crossAccountVpcs
 * @property string $customDomainCertificateArn
 * @property \Aws\Api\DateTimeResult $customDomainCertificateExpiryTime
 * @property string $customDomainName
 * @property Endpoint $endpoint
 * @property bool $enhancedVpcRouting
 * @property string $ipAddressType
 * @property int $maxCapacity
 * @property string $namespaceName
 * @property string $patchVersion
 * @property int $port
 * @property PerformanceTarget $pricePerformanceTarget
 * @property bool $publiclyAccessible
 * @property list<string> $securityGroupIds
 * @property 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING' $status
 * @property list<string> $subnetIds
 * @property string $workgroupArn
 * @property string $workgroupId
 * @property string $workgroupName
 * @property string $workgroupVersion
 */
class Workgroup extends Shape
{
    /**
     * @param array{
     *     baseCapacity?: int,
     *     configParameters?: list<ConfigParameter>,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     crossAccountVpcs?: list<string>,
     *     customDomainCertificateArn?: string,
     *     customDomainCertificateExpiryTime?: \Aws\Api\DateTimeResult,
     *     customDomainName?: string,
     *     endpoint?: Endpoint,
     *     enhancedVpcRouting?: bool,
     *     ipAddressType?: string,
     *     maxCapacity?: int,
     *     namespaceName?: string,
     *     patchVersion?: string,
     *     port?: int,
     *     pricePerformanceTarget?: PerformanceTarget,
     *     publiclyAccessible?: bool,
     *     securityGroupIds?: list<string>,
     *     status?: 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING',
     *     subnetIds?: list<string>,
     *     workgroupArn?: string,
     *     workgroupId?: string,
     *     workgroupName?: string,
     *     workgroupVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
