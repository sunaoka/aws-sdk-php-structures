<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CertificateAuthorityData
 * @property string|null $ClusterStatus
 * @property string|null $Endpoint
 * @property string|null $Name
 * @property AwsEksClusterResourcesVpcConfigDetails|null $ResourcesVpcConfig
 * @property string|null $RoleArn
 * @property string|null $Version
 * @property AwsEksClusterLoggingDetails|null $Logging
 */
class AwsEksClusterDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CertificateAuthorityData?: string|null,
     *     ClusterStatus?: string|null,
     *     Endpoint?: string|null,
     *     Name?: string|null,
     *     ResourcesVpcConfig?: AwsEksClusterResourcesVpcConfigDetails|null,
     *     RoleArn?: string|null,
     *     Version?: string|null,
     *     Logging?: AwsEksClusterLoggingDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
