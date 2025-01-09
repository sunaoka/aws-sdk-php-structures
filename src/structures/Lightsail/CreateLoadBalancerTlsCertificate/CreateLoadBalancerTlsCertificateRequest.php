<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateLoadBalancerTlsCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property string $certificateName
 * @property string $certificateDomainName
 * @property list<string> $certificateAlternativeNames
 * @property list<Shapes\Tag> $tags
 */
class CreateLoadBalancerTlsCertificateRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     certificateName: string,
     *     certificateDomainName: string,
     *     certificateAlternativeNames?: list<string>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
