<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OrganizationEventDetails> $successfulSet
 * @property list<Shapes\OrganizationEventDetailsErrorItem> $failedSet
 */
class DescribeEventDetailsForOrganizationResponse extends Response
{
}
