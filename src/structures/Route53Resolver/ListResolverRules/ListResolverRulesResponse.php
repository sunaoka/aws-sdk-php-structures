<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRules;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\ResolverRule>|null $ResolverRules
 */
class ListResolverRulesResponse extends Response
{
}
