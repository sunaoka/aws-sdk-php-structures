<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessInstanceId
 * @property string $VerifiedAccessGroupId
 * @property string $VerifiedAccessEndpointId
 * @property string $ApplicationDomain
 * @property 'load-balancer'|'network-interface'|'rds'|'cidr' $EndpointType
 * @property 'vpc' $AttachmentType
 * @property string $DomainCertificateArn
 * @property string $EndpointDomain
 * @property string $DeviceValidationDomain
 * @property list<string> $SecurityGroupIds
 * @property VerifiedAccessEndpointLoadBalancerOptions $LoadBalancerOptions
 * @property VerifiedAccessEndpointEniOptions $NetworkInterfaceOptions
 * @property VerifiedAccessEndpointStatus $Status
 * @property string $Description
 * @property string $CreationTime
 * @property string $LastUpdatedTime
 * @property string $DeletionTime
 * @property list<Tag> $Tags
 * @property VerifiedAccessSseSpecificationResponse $SseSpecification
 * @property VerifiedAccessEndpointRdsOptions $RdsOptions
 * @property VerifiedAccessEndpointCidrOptions $CidrOptions
 */
class VerifiedAccessEndpoint extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string,
     *     VerifiedAccessGroupId?: string,
     *     VerifiedAccessEndpointId?: string,
     *     ApplicationDomain?: string,
     *     EndpointType?: 'load-balancer'|'network-interface'|'rds'|'cidr',
     *     AttachmentType?: 'vpc',
     *     DomainCertificateArn?: string,
     *     EndpointDomain?: string,
     *     DeviceValidationDomain?: string,
     *     SecurityGroupIds?: list<string>,
     *     LoadBalancerOptions?: VerifiedAccessEndpointLoadBalancerOptions,
     *     NetworkInterfaceOptions?: VerifiedAccessEndpointEniOptions,
     *     Status?: VerifiedAccessEndpointStatus,
     *     Description?: string,
     *     CreationTime?: string,
     *     LastUpdatedTime?: string,
     *     DeletionTime?: string,
     *     Tags?: list<Tag>,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse,
     *     RdsOptions?: VerifiedAccessEndpointRdsOptions,
     *     CidrOptions?: VerifiedAccessEndpointCidrOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
