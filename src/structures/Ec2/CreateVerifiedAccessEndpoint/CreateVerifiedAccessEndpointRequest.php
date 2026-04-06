<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property 'load-balancer'|'network-interface' $EndpointType
 * @property 'vpc' $AttachmentType
 * @property string $DomainCertificateArn
 * @property string $ApplicationDomain
 * @property string $EndpointDomainPrefix
 * @property list<string>|null $SecurityGroupIds
 * @property Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions|null $LoadBalancerOptions
 * @property Shapes\CreateVerifiedAccessEndpointEniOptions|null $NetworkInterfaceOptions
 * @property string|null $Description
 * @property string|null $PolicyDocument
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 */
class CreateVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     EndpointType: 'load-balancer'|'network-interface',
     *     AttachmentType: 'vpc',
     *     DomainCertificateArn: string,
     *     ApplicationDomain: string,
     *     EndpointDomainPrefix: string,
     *     SecurityGroupIds?: list<string>|null,
     *     LoadBalancerOptions?: Shapes\CreateVerifiedAccessEndpointLoadBalancerOptions|null,
     *     NetworkInterfaceOptions?: Shapes\CreateVerifiedAccessEndpointEniOptions|null,
     *     Description?: string|null,
     *     PolicyDocument?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
