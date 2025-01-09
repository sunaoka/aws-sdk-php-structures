<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata $DocumentMetadata
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'PARTIAL_SUCCESS' $JobStatus
 * @property string $NextToken
 * @property list<Shapes\Block> $Blocks
 * @property list<Shapes\Warning> $Warnings
 * @property string $StatusMessage
 * @property string $AnalyzeDocumentModelVersion
 */
class GetDocumentAnalysisResponse extends Response
{
}
