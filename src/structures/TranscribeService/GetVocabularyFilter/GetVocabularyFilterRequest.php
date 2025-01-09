<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetVocabularyFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyFilterName
 */
class GetVocabularyFilterRequest extends Request
{
    /**
     * @param array{VocabularyFilterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
