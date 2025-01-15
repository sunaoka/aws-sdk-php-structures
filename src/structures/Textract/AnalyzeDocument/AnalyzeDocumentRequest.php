<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property Shapes\HumanLoopConfig|null $HumanLoopConfig
 * @property Shapes\QueriesConfig|null $QueriesConfig
 * @property Shapes\AdaptersConfig|null $AdaptersConfig
 */
class AnalyzeDocumentRequest extends Request
{
    /**
     * @param array{
     *     Document: Shapes\Document,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig|null,
     *     QueriesConfig?: Shapes\QueriesConfig|null,
     *     AdaptersConfig?: Shapes\AdaptersConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
