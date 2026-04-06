<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALLOW'|'DENY'|null $DefaultAction
 * @property int<1, max>|null $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement>|null $PolicyStatements
 * @property string $TrafficPolicyId
 * @property string|null $TrafficPolicyName
 */
class UpdateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     DefaultAction?: 'ALLOW'|'DENY'|null,
     *     MaxMessageSizeBytes?: int<1, max>|null,
     *     PolicyStatements?: list<Shapes\PolicyStatement>|null,
     *     TrafficPolicyId: string,
     *     TrafficPolicyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
