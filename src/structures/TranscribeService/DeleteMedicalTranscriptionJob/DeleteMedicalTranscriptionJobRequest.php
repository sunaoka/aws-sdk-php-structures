<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalTranscriptionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalTranscriptionJobName
 */
class DeleteMedicalTranscriptionJobRequest extends Request
{
    /**
     * @param array{MedicalTranscriptionJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
