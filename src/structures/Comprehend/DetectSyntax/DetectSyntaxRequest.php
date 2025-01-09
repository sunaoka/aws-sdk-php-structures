<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSyntax;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt' $LanguageCode
 */
class DetectSyntaxRequest extends Request
{
    /**
     * @param array{
     *     Text: string,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
