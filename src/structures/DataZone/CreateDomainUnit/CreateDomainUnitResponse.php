<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $ancestorDomainUnitIds
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property string|null $parentDomainUnitId
 */
class CreateDomainUnitResponse extends Response
{
}
