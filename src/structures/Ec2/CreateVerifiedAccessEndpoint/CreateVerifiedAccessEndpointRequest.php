<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property 'load-balancer'|'network-interface'|'rds'|'cidr' $EndpointType
 * @property 'vpc' $AttachmentType
 * @property string|null $DomainCertificateArn
 * @property string|null $ApplicationDomain
 * @property string|null $EndpointDomainPrefix
 * @property list<string>|null $SecurityGroupIds
 * @property Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions|null $LoadBalancerOptions
 * @property Shapes\CreateVerifiedAccessEndpointEniOptions|null $NetworkInterfaceOptions
 * @property string|null $Description
 * @property string|null $PolicyDocument
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 * @property Shapes\CreateVerifiedAccessEndpointRdsOptions|null $RdsOptions
 * @property Shapes\CreateVerifiedAccessEndpointCidrOptions|null $CidrOptions
 */
class CreateVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     EndpointType: 'load-balancer'|'network-interface'|'rds'|'cidr',
     *     AttachmentType: 'vpc',
     *     DomainCertificateArn?: string|null,
     *     ApplicationDomain?: string|null,
     *     EndpointDomainPrefix?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     LoadBalancerOptions?: Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions|null,
     *     NetworkInterfaceOptions?: Shapes\CreateVerifiedAccessEndpointEniOptions|null,
     *     Description?: string|null,
     *     PolicyDocument?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest|null,
     *     RdsOptions?: Shapes\CreateVerifiedAccessEndpointRdsOptions|null,
     *     CidrOptions?: Shapes\CreateVerifiedAccessEndpointCidrOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
