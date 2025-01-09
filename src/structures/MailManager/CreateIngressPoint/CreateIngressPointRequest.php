<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\IngressPointConfiguration $IngressPointConfiguration
 * @property string $IngressPointName
 * @property string $RuleSetId
 * @property list<Shapes\Tag> $Tags
 * @property string $TrafficPolicyId
 * @property 'OPEN'|'AUTH' $Type
 */
class CreateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration,
     *     IngressPointName: string,
     *     RuleSetId: string,
     *     Tags?: list<Shapes\Tag>,
     *     TrafficPolicyId: string,
     *     Type: 'OPEN'|'AUTH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
