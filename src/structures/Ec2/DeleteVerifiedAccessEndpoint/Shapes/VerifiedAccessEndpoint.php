<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $VerifiedAccessGroupId
 * @property string|null $VerifiedAccessEndpointId
 * @property string|null $ApplicationDomain
 * @property 'load-balancer'|'network-interface'|'rds'|'cidr'|null $EndpointType
 * @property 'vpc'|null $AttachmentType
 * @property string|null $DomainCertificateArn
 * @property string|null $EndpointDomain
 * @property string|null $DeviceValidationDomain
 * @property list<string>|null $SecurityGroupIds
 * @property VerifiedAccessEndpointLoadBalancerOptions|null $LoadBalancerOptions
 * @property VerifiedAccessEndpointEniOptions|null $NetworkInterfaceOptions
 * @property VerifiedAccessEndpointStatus|null $Status
 * @property string|null $Description
 * @property string|null $CreationTime
 * @property string|null $LastUpdatedTime
 * @property string|null $DeletionTime
 * @property list<Tag>|null $Tags
 * @property VerifiedAccessSseSpecificationResponse|null $SseSpecification
 * @property VerifiedAccessEndpointRdsOptions|null $RdsOptions
 * @property VerifiedAccessEndpointCidrOptions|null $CidrOptions
 */
class VerifiedAccessEndpoint extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId?: string|null,
     *     VerifiedAccessGroupId?: string|null,
     *     VerifiedAccessEndpointId?: string|null,
     *     ApplicationDomain?: string|null,
     *     EndpointType?: 'load-balancer'|'network-interface'|'rds'|'cidr'|null,
     *     AttachmentType?: 'vpc'|null,
     *     DomainCertificateArn?: string|null,
     *     EndpointDomain?: string|null,
     *     DeviceValidationDomain?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     LoadBalancerOptions?: VerifiedAccessEndpointLoadBalancerOptions|null,
     *     NetworkInterfaceOptions?: VerifiedAccessEndpointEniOptions|null,
     *     Status?: VerifiedAccessEndpointStatus|null,
     *     Description?: string|null,
     *     CreationTime?: string|null,
     *     LastUpdatedTime?: string|null,
     *     DeletionTime?: string|null,
     *     Tags?: list<Tag>|null,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse|null,
     *     RdsOptions?: VerifiedAccessEndpointRdsOptions|null,
     *     CidrOptions?: VerifiedAccessEndpointCidrOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
