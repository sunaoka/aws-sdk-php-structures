<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AffectedEntity> $entities
 * @property list<Shapes\OrganizationAffectedEntitiesErrorItem> $failedSet
 * @property string $nextToken
 */
class DescribeAffectedEntitiesForOrganizationResponse extends Response
{
}
