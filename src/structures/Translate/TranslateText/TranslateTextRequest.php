<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property list<string>|null $TerminologyNames
 * @property string $SourceLanguageCode
 * @property string $TargetLanguageCode
 * @property Shapes\TranslationSettings|null $Settings
 */
class TranslateTextRequest extends Request
{
    /**
     * @param array{
     *     Text: string,
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
