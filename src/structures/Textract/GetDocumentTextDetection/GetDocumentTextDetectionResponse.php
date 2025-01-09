<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentTextDetection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $JobStatus
 * @property string $NextToken
 * @property list<Shapes\Block> $Blocks
 * @property list<Shapes\Warning> $Warnings
 * @property string $StatusMessage
 * @property string $DetectDocumentTextModelVersion
 */
class GetDocumentTextDetectionResponse extends Response
{
}
