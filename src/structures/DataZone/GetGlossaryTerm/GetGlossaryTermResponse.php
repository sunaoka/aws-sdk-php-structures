<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string $longDescription
 * @property string $name
 * @property string $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations $termRelations
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetGlossaryTermResponse extends Response
{
}
