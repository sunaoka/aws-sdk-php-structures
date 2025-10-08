<?php

namespace Sunaoka\Aws\Structures\Evs\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null $environmentState
 * @property string|null $stateDetails
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property string|null $environmentArn
 * @property string|null $environmentName
 * @property string|null $vpcId
 * @property string|null $serviceAccessSubnetId
 * @property 'VCF-5.2.1'|null $vcfVersion
 * @property bool|null $termsAccepted
 * @property list<LicenseInfo>|null $licenseInfo
 * @property string|null $siteId
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $environmentStatus
 * @property list<Check>|null $checks
 * @property ConnectivityInfo|null $connectivityInfo
 * @property VcfHostnames|null $vcfHostnames
 * @property string|null $kmsKeyId
 * @property ServiceAccessSecurityGroups|null $serviceAccessSecurityGroups
 * @property list<Secret>|null $credentials
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     environmentState?: 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null,
     *     stateDetails?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     environmentArn?: string|null,
     *     environmentName?: string|null,
     *     vpcId?: string|null,
     *     serviceAccessSubnetId?: string|null,
     *     vcfVersion?: 'VCF-5.2.1'|null,
     *     termsAccepted?: bool|null,
     *     licenseInfo?: list<LicenseInfo>|null,
     *     siteId?: string|null,
     *     environmentStatus?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     checks?: list<Check>|null,
     *     connectivityInfo?: ConnectivityInfo|null,
     *     vcfHostnames?: VcfHostnames|null,
     *     kmsKeyId?: string|null,
     *     serviceAccessSecurityGroups?: ServiceAccessSecurityGroups|null,
     *     credentials?: list<Secret>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
