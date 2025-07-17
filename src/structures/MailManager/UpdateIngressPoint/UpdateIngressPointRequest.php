<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IngressPointId
 * @property string|null $IngressPointName
 * @property 'ACTIVE'|'CLOSED'|null $StatusToUpdate
 * @property string|null $RuleSetId
 * @property string|null $TrafficPolicyId
 * @property Shapes\IngressPointConfiguration|null $IngressPointConfiguration
 */
class UpdateIngressPointRequest extends Request
{
    /**
     * @param array{
     *     IngressPointId: string,
     *     IngressPointName?: string|null,
     *     StatusToUpdate?: 'ACTIVE'|'CLOSED'|null,
     *     RuleSetId?: string|null,
     *     TrafficPolicyId?: string|null,
     *     IngressPointConfiguration?: Shapes\IngressPointConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
