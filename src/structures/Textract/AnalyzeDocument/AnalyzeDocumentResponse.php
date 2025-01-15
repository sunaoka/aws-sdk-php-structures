<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DocumentMetadata|null $DocumentMetadata
 * @property list<Shapes\Block>|null $Blocks
 * @property Shapes\HumanLoopActivationOutput|null $HumanLoopActivationOutput
 * @property string|null $AnalyzeDocumentModelVersion
 */
class AnalyzeDocumentResponse extends Response
{
}
