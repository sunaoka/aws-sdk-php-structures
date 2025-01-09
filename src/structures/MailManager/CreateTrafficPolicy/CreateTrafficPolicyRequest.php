<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property int<1, max> $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement> $PolicyStatements
 * @property list<Shapes\Tag> $Tags
 * @property string $TrafficPolicyName
 */
class CreateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DefaultAction: 'ALLOW'|'DENY',
     *     MaxMessageSizeBytes?: int<1, max>,
     *     PolicyStatements: list<Shapes\PolicyStatement>,
     *     Tags?: list<Shapes\Tag>,
     *     TrafficPolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
