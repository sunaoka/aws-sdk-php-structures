<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $lastUpdatedBy
 * @property string $name
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property string $parentDomainUnitId
 */
class UpdateDomainUnitResponse extends Response
{
}
