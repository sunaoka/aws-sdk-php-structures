<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectDominantLanguage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class DetectDominantLanguageRequest extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
