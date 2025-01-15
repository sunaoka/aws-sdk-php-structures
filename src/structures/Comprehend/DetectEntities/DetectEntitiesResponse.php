<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Entity>|null $Entities
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property list<Shapes\DocumentTypeListItem>|null $DocumentType
 * @property list<Shapes\Block>|null $Blocks
 * @property list<Shapes\ErrorsListItem>|null $Errors
 */
class DetectEntitiesResponse extends Response
{
}
