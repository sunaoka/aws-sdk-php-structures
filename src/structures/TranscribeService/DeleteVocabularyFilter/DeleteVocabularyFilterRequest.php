<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteVocabularyFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyFilterName
 */
class DeleteVocabularyFilterRequest extends Request
{
    /**
     * @param array{VocabularyFilterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
