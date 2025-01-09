<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property 'load-balancer'|'network-interface'|'rds'|'cidr' $EndpointType
 * @property 'vpc' $AttachmentType
 * @property string $DomainCertificateArn
 * @property string $ApplicationDomain
 * @property string $EndpointDomainPrefix
 * @property list<string> $SecurityGroupIds
 * @property Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions $LoadBalancerOptions
 * @property Shapes\CreateVerifiedAccessEndpointEniOptions $NetworkInterfaceOptions
 * @property string $Description
 * @property string $PolicyDocument
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 * @property Shapes\CreateVerifiedAccessEndpointRdsOptions $RdsOptions
 * @property Shapes\CreateVerifiedAccessEndpointCidrOptions $CidrOptions
 */
class CreateVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     EndpointType: 'load-balancer'|'network-interface'|'rds'|'cidr',
     *     AttachmentType: 'vpc',
     *     DomainCertificateArn?: string,
     *     ApplicationDomain?: string,
     *     EndpointDomainPrefix?: string,
     *     SecurityGroupIds?: list<string>,
     *     LoadBalancerOptions?: Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions,
     *     NetworkInterfaceOptions?: Shapes\CreateVerifiedAccessEndpointEniOptions,
     *     Description?: string,
     *     PolicyDocument?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest,
     *     RdsOptions?: Shapes\CreateVerifiedAccessEndpointRdsOptions,
     *     CidrOptions?: Shapes\CreateVerifiedAccessEndpointCidrOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
