<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property 'FORWARD'|'SYSTEM'|'RECURSIVE' $RuleType
 * @property string $DomainName
 * @property list<Shapes\TargetAddress> $TargetIps
 * @property string $ResolverEndpointId
 * @property list<Shapes\Tag> $Tags
 */
class CreateResolverRuleRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name?: string,
     *     RuleType: 'FORWARD'|'SYSTEM'|'RECURSIVE',
     *     DomainName?: string,
     *     TargetIps?: list<Shapes\TargetAddress>,
     *     ResolverEndpointId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
