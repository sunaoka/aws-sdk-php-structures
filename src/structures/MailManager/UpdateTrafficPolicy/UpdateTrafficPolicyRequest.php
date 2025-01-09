<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property int<1, max> $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement> $PolicyStatements
 * @property string $TrafficPolicyId
 * @property string $TrafficPolicyName
 */
class UpdateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     DefaultAction?: 'ALLOW'|'DENY',
     *     MaxMessageSizeBytes?: int<1, max>,
     *     PolicyStatements?: list<Shapes\PolicyStatement>,
     *     TrafficPolicyId: string,
     *     TrafficPolicyName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
