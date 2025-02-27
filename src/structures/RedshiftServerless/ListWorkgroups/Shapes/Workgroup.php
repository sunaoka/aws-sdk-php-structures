<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListWorkgroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $baseCapacity
 * @property list<ConfigParameter>|null $configParameters
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property list<string>|null $crossAccountVpcs
 * @property string|null $customDomainCertificateArn
 * @property \Aws\Api\DateTimeResult|null $customDomainCertificateExpiryTime
 * @property string|null $customDomainName
 * @property Endpoint|null $endpoint
 * @property bool|null $enhancedVpcRouting
 * @property string|null $ipAddressType
 * @property int|null $maxCapacity
 * @property string|null $namespaceName
 * @property string|null $patchVersion
 * @property string|null $pendingTrackName
 * @property int|null $port
 * @property PerformanceTarget|null $pricePerformanceTarget
 * @property bool|null $publiclyAccessible
 * @property list<string>|null $securityGroupIds
 * @property 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $trackName
 * @property string|null $workgroupArn
 * @property string|null $workgroupId
 * @property string|null $workgroupName
 * @property string|null $workgroupVersion
 */
class Workgroup extends Shape
{
    /**
     * @param array{
     *     baseCapacity?: int|null,
     *     configParameters?: list<ConfigParameter>|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     crossAccountVpcs?: list<string>|null,
     *     customDomainCertificateArn?: string|null,
     *     customDomainCertificateExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     customDomainName?: string|null,
     *     endpoint?: Endpoint|null,
     *     enhancedVpcRouting?: bool|null,
     *     ipAddressType?: string|null,
     *     maxCapacity?: int|null,
     *     namespaceName?: string|null,
     *     patchVersion?: string|null,
     *     pendingTrackName?: string|null,
     *     port?: int|null,
     *     pricePerformanceTarget?: PerformanceTarget|null,
     *     publiclyAccessible?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     status?: 'CREATING'|'AVAILABLE'|'MODIFYING'|'DELETING'|null,
     *     subnetIds?: list<string>|null,
     *     trackName?: string|null,
     *     workgroupArn?: string|null,
     *     workgroupId?: string|null,
     *     workgroupName?: string|null,
     *     workgroupVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
