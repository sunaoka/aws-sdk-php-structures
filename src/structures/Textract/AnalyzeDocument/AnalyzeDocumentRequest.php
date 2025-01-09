<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property Shapes\HumanLoopConfig $HumanLoopConfig
 * @property Shapes\QueriesConfig $QueriesConfig
 * @property Shapes\AdaptersConfig $AdaptersConfig
 */
class AnalyzeDocumentRequest extends Request
{
    /**
     * @param array{
     *     Document: Shapes\Document,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     HumanLoopConfig?: Shapes\HumanLoopConfig,
     *     QueriesConfig?: Shapes\QueriesConfig,
     *     AdaptersConfig?: Shapes\AdaptersConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
