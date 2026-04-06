<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $name
 * @property string|null $parentDomainUnitId
 * @property string|null $description
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 */
class GetDomainUnitResponse extends Response
{
}
