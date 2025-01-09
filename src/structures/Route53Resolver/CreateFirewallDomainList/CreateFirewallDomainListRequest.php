<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 */
class CreateFirewallDomainListRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
