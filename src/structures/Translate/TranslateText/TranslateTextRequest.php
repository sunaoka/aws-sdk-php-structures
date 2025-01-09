<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property list<string> $TerminologyNames
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property Shapes\TranslationSettings $Settings
 */
class TranslateTextRequest extends Request
{
    /**
     * @param array{
     *     Text: string,
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
