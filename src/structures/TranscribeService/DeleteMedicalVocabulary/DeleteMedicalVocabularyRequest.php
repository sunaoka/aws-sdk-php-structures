<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyName
 */
class DeleteMedicalVocabularyRequest extends Request
{
    /**
     * @param array{VocabularyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
