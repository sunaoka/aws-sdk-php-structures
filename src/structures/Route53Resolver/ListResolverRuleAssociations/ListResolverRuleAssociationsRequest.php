<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRuleAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListResolverRuleAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
