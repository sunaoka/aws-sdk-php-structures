<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CertificateAuthorityData
 * @property string $ClusterStatus
 * @property string $Endpoint
 * @property string $Name
 * @property AwsEksClusterResourcesVpcConfigDetails $ResourcesVpcConfig
 * @property string $RoleArn
 * @property string $Version
 * @property AwsEksClusterLoggingDetails $Logging
 */
class AwsEksClusterDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CertificateAuthorityData?: string,
     *     ClusterStatus?: string,
     *     Endpoint?: string,
     *     Name?: string,
     *     ResourcesVpcConfig?: AwsEksClusterResourcesVpcConfigDetails,
     *     RoleArn?: string,
     *     Version?: string,
     *     Logging?: AwsEksClusterLoggingDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
