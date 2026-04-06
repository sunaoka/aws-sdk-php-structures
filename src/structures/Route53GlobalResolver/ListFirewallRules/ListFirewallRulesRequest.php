<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $dnsViewId
 * @property array<string, list<string>>|null $filters
 */
class ListFirewallRulesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     dnsViewId: string,
     *     filters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
