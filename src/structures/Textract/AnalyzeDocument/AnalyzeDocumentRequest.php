<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'> $FeatureTypes
 * @property Shapes\HumanLoopConfig|null $HumanLoopConfig
 * @property Shapes\QueriesConfig|null $QueriesConfig
 */
class AnalyzeDocumentRequest extends Request
{
    /**
     * @param array{
     *     Document: Shapes\Document,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'>,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig|null,
     *     QueriesConfig?: Shapes\QueriesConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
