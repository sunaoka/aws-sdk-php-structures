<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'>|null $inputLanguages
 * @property 'DEFAULT'|'EN'|null $generativeOutputLanguage
 * @property bool|null $identifyMultipleLanguages
 */
class AudioLanguageConfiguration extends Shape
{
    /**
     * @param array{
     *     inputLanguages?: list<'EN'|'DE'|'ES'|'FR'|'IT'|'PT'|'JA'|'KO'|'CN'|'TW'|'HK'>|null,
     *     generativeOutputLanguage?: 'DEFAULT'|'EN'|null,
     *     identifyMultipleLanguages?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
