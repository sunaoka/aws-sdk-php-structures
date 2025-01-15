<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Document $Document
 * @property list<string>|null $TerminologyNames
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property Shapes\TranslationSettings|null $Settings
 */
class TranslateDocumentRequest extends Request
{
    /**
     * @param array{
     *     Document: Shapes\Document,
     *     TerminologyNames?: list<string>|null,
     *     SourceLanguageCode: string,
     *     TargetLanguageCode: string,
     *     Settings?: Shapes\TranslationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
