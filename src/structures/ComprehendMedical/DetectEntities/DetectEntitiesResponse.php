<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Entity> $Entities
 * @property list<Shapes\UnmappedAttribute>|null $UnmappedAttributes
 * @property string|null $PaginationToken
 * @property string $ModelVersion
 */
class DetectEntitiesResponse extends Response
{
}
