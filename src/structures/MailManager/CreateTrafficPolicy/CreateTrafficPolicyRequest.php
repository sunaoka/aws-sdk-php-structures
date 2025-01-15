<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property int<1, max>|null $MaxMessageSizeBytes
 * @property list<Shapes\PolicyStatement> $PolicyStatements
 * @property list<Shapes\Tag>|null $Tags
 * @property string $TrafficPolicyName
 */
class CreateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DefaultAction: 'ALLOW'|'DENY',
     *     MaxMessageSizeBytes?: int<1, max>|null,
     *     PolicyStatements: list<Shapes\PolicyStatement>,
     *     Tags?: list<Shapes\Tag>|null,
     *     TrafficPolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
