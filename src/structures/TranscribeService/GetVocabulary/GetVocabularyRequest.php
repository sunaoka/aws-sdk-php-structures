<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyName
 */
class GetVocabularyRequest extends Request
{
    /**
     * @param array{VocabularyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
