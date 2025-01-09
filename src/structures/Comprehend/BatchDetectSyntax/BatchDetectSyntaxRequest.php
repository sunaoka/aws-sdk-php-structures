<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSyntax;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TextList
 * @property 'en'|'es'|'fr'|'de'|'it'|'pt' $LanguageCode
 */
class BatchDetectSyntaxRequest extends Request
{
    /**
     * @param array{
     *     TextList: list<string>,
     *     LanguageCode: 'en'|'es'|'fr'|'de'|'it'|'pt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
