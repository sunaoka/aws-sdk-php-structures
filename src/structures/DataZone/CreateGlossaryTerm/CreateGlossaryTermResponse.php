<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $glossaryId
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $status
 * @property string|null $shortDescription
 * @property string|null $longDescription
 * @property Shapes\TermRelations|null $termRelations
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class CreateGlossaryTermResponse extends Response
{
}
