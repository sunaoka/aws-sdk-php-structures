<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $name
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property string|null $description
 * @property string|null $parentDomainUnitId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 */
class UpdateDomainUnitResponse extends Response
{
}
