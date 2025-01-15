<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IngressPointConfiguration|null $IngressPointConfiguration
 * @property string $IngressPointId
 * @property string|null $IngressPointName
 * @property string|null $RuleSetId
 * @property 'ACTIVE'|'CLOSED'|null $StatusToUpdate
 * @property string|null $TrafficPolicyId
 */
class UpdateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration|null,
     *     IngressPointId: string,
     *     IngressPointName?: string|null,
     *     RuleSetId?: string|null,
     *     StatusToUpdate?: 'ACTIVE'|'CLOSED'|null,
     *     TrafficPolicyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
