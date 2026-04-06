<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListRoutingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $DomainNameId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRoutingRulesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameId?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
