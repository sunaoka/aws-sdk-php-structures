<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRuleAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\ResolverRuleAssociation> $ResolverRuleAssociations
 */
class ListResolverRuleAssociationsResponse extends Response
{
}
