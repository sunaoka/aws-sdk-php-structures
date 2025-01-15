<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OrganizationEventDetails>|null $successfulSet
 * @property list<Shapes\OrganizationEventDetailsErrorItem>|null $failedSet
 */
class DescribeEventDetailsForOrganizationResponse extends Response
{
}
