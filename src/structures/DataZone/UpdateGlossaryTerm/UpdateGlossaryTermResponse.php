<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $glossaryId
 * @property string $id
 * @property string $longDescription
 * @property string $name
 * @property string $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations $termRelations
 */
class UpdateGlossaryTermResponse extends Response
{
}
