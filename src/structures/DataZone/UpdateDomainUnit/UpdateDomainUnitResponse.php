<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $lastUpdatedBy
 * @property string $name
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property string|null $parentDomainUnitId
 */
class UpdateDomainUnitResponse extends Response
{
}
