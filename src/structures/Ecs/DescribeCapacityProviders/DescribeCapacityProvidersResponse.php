<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CapacityProvider> $capacityProviders
 * @property list<Shapes\Failure> $failures
 * @property string $nextToken
 */
class DescribeCapacityProvidersResponse extends Response
{
}
