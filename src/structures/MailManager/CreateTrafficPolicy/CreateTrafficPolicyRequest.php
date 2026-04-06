<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $TrafficPolicyName
 * @property list<Shapes\PolicyStatement> $PolicyStatements
 * @property 'ALLOW'|'DENY' $DefaultAction
 * @property int<1, max>|null $MaxMessageSizeBytes
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     TrafficPolicyName: string,
     *     PolicyStatements: list<Shapes\PolicyStatement>,
     *     DefaultAction: 'ALLOW'|'DENY',
     *     MaxMessageSizeBytes?: int<1, max>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
