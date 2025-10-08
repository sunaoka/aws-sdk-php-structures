<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceNetworkArn
 * @property string|null $resourceGatewayArn
 * @property list<string>|null $managedServicesIpv4Cidrs
 * @property ServiceNetworkEndpoint|null $serviceNetworkEndpoint
 * @property ManagedS3BackupAccess|null $managedS3BackupAccess
 * @property ZeroEtlAccess|null $zeroEtlAccess
 * @property S3Access|null $s3Access
 */
class ManagedServices extends Shape
{
    /**
     * @param array{
     *     serviceNetworkArn?: string|null,
     *     resourceGatewayArn?: string|null,
     *     managedServicesIpv4Cidrs?: list<string>|null,
     *     serviceNetworkEndpoint?: ServiceNetworkEndpoint|null,
     *     managedS3BackupAccess?: ManagedS3BackupAccess|null,
     *     zeroEtlAccess?: ZeroEtlAccess|null,
     *     s3Access?: S3Access|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
