<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CapacityProvider>|null $capacityProviders
 * @property list<Shapes\Failure>|null $failures
 * @property string|null $nextToken
 */
class DescribeCapacityProvidersResponse extends Response
{
}
