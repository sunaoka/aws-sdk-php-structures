<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Entity> $Entities
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property list<Shapes\DocumentTypeListItem> $DocumentType
 * @property list<Shapes\Block> $Blocks
 * @property list<Shapes\ErrorsListItem> $Errors
 */
class DetectEntitiesResponse extends Response
{
}
