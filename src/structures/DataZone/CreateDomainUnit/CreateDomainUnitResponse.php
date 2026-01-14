<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $name
 * @property string|null $parentDomainUnitId
 * @property string|null $description
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property list<string> $ancestorDomainUnitIds
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class CreateDomainUnitResponse extends Response
{
}
