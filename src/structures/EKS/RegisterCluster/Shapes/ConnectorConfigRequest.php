<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property 'EKS_ANYWHERE'|'ANTHOS'|'GKE'|'AKS'|'OPENSHIFT'|'TANZU'|'RANCHER'|'EC2'|'OTHER' $provider
 */
class ConnectorConfigRequest extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     provider: 'EKS_ANYWHERE'|'ANTHOS'|'GKE'|'AKS'|'OPENSHIFT'|'TANZU'|'RANCHER'|'EC2'|'OTHER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
