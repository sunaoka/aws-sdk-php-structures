<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VocabularyName
 */
class GetMedicalVocabularyRequest extends Request
{
    /**
     * @param array{VocabularyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
