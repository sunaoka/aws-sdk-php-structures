<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\IngressPointConfiguration|null $IngressPointConfiguration
 * @property string $IngressPointName
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property string $RuleSetId
 * @property list<Shapes\Tag>|null $Tags
 * @property string $TrafficPolicyId
 * @property 'OPEN'|'AUTH' $Type
 */
class CreateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration|null,
     *     IngressPointName: string,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     RuleSetId: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     TrafficPolicyId: string,
     *     Type: 'OPEN'|'AUTH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
