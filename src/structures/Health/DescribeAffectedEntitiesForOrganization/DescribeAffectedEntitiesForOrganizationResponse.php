<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AffectedEntity>|null $entities
 * @property list<Shapes\OrganizationAffectedEntitiesErrorItem>|null $failedSet
 * @property string|null $nextToken
 */
class DescribeAffectedEntitiesForOrganizationResponse extends Response
{
}
