<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalTranscriptionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalTranscriptionJobName
 */
class GetMedicalTranscriptionJobRequest extends Request
{
    /**
     * @param array{MedicalTranscriptionJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
