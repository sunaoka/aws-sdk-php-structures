<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRules;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\ResolverRule> $ResolverRules
 */
class ListResolverRulesResponse extends Response
{
}
