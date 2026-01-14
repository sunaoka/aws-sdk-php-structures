<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string $name
 * @property string|null $shortDescription
 * @property string|null $longDescription
 * @property Shapes\TermRelations|null $termRelations
 * @property 'ENABLED'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class GetGlossaryTermResponse extends Response
{
}
