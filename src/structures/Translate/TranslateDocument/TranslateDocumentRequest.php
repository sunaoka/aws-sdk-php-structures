<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 * @property list<string> $TerminologyNames
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property Shapes\TranslationSettings $Settings
 */
class TranslateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Document: Shapes\Document,
     *     TerminologyNames?: list<string>,
     *     SourceLanguageCode: string,
     *     TargetLanguageCode: string,
     *     Settings?: Shapes\TranslationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
