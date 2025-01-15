<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DocumentClass>|null $Classes
 * @property list<Shapes\DocumentLabel>|null $Labels
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property list<Shapes\DocumentTypeListItem>|null $DocumentType
 * @property list<Shapes\ErrorsListItem>|null $Errors
 * @property list<Shapes\WarningsListItem>|null $Warnings
 */
class ClassifyDocumentResponse extends Response
{
}
