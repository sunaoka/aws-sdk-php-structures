<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverQueryLogConfigs;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property int $TotalCount
 * @property int $TotalFilteredCount
 * @property list<Shapes\ResolverQueryLogConfig> $ResolverQueryLogConfigs
 */
class ListResolverQueryLogConfigsResponse extends Response
{
}
