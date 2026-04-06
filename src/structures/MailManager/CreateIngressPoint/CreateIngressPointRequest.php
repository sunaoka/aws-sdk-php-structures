<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $IngressPointName
 * @property 'OPEN'|'AUTH'|'MTLS' $Type
 * @property string $RuleSetId
 * @property string $TrafficPolicyId
 * @property Shapes\IngressPointConfiguration|null $IngressPointConfiguration
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property 'REQUIRED'|'OPTIONAL'|'FIPS'|null $TlsPolicy
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     IngressPointName: string,
     *     Type: 'OPEN'|'AUTH'|'MTLS',
     *     RuleSetId: string,
     *     TrafficPolicyId: string,
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration|null,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     TlsPolicy?: 'REQUIRED'|'OPTIONAL'|'FIPS'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
