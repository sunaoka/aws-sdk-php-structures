<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DocumentClass> $Classes
 * @property list<Shapes\DocumentLabel> $Labels
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property list<Shapes\DocumentTypeListItem> $DocumentType
 * @property list<Shapes\ErrorsListItem> $Errors
 * @property list<Shapes\WarningsListItem> $Warnings
 */
class ClassifyDocumentResponse extends Response
{
}
