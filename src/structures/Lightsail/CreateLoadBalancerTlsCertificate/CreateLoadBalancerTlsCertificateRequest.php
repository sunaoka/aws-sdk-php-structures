<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateLoadBalancerTlsCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property string $certificateName
 * @property string $certificateDomainName
 * @property list<string>|null $certificateAlternativeNames
 * @property list<Shapes\Tag>|null $tags
 */
class CreateLoadBalancerTlsCertificateRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     certificateName: string,
     *     certificateDomainName: string,
     *     certificateAlternativeNames?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
