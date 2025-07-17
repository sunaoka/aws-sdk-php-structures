<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficPolicyId
 * @property string|null $TrafficPolicyName
 * @property list<Shapes\PolicyStatement>|null $PolicyStatements
 * @property 'ALLOW'|'DENY'|null $DefaultAction
 * @property int<1, max>|null $MaxMessageSizeBytes
 */
class UpdateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     TrafficPolicyId: string,
     *     TrafficPolicyName?: string|null,
     *     PolicyStatements?: list<Shapes\PolicyStatement>|null,
     *     DefaultAction?: 'ALLOW'|'DENY'|null,
     *     MaxMessageSizeBytes?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
