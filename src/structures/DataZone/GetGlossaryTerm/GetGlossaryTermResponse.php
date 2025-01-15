<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string|null $longDescription
 * @property string $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations|null $termRelations
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetGlossaryTermResponse extends Response
{
}
