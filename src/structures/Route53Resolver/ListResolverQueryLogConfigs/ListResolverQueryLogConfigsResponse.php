<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverQueryLogConfigs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property int|null $TotalCount
 * @property int|null $TotalFilteredCount
 * @property list<Shapes\ResolverQueryLogConfig>|null $ResolverQueryLogConfigs
 */
class ListResolverQueryLogConfigsResponse extends Response
{
}
