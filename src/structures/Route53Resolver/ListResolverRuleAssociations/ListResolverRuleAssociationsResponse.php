<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRuleAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\ResolverRuleAssociation>|null $ResolverRuleAssociations
 */
class ListResolverRuleAssociationsResponse extends Response
{
}
