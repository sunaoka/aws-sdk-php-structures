<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectDominantLanguage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TextList
 */
class BatchDetectDominantLanguageRequest extends Request
{
    /**
     * @param array{TextList: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
