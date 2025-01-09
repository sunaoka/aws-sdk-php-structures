<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $ancestorDomainUnitIds
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property list<Shapes\DomainUnitOwnerProperties> $owners
 * @property string $parentDomainUnitId
 */
class CreateDomainUnitResponse extends Response
{
}
