<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IngressPointConfiguration $IngressPointConfiguration
 * @property string $IngressPointId
 * @property string $IngressPointName
 * @property string $RuleSetId
 * @property 'ACTIVE'|'CLOSED' $StatusToUpdate
 * @property string $TrafficPolicyId
 */
class UpdateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration,
     *     IngressPointId: string,
     *     IngressPointName?: string,
     *     RuleSetId?: string,
     *     StatusToUpdate?: 'ACTIVE'|'CLOSED',
     *     TrafficPolicyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
