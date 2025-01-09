<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyName
 */
class DeleteVocabularyRequest extends Request
{
    /**
     * @param array{VocabularyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
