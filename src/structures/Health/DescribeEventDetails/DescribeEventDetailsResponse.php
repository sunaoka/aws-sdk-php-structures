<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\EventDetails>|null $successfulSet
 * @property list<Shapes\EventDetailsErrorItem>|null $failedSet
 */
class DescribeEventDetailsResponse extends Response
{
}
