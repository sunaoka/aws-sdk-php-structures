<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalScribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalScribeJobName
 */
class DeleteMedicalScribeJobRequest extends Request
{
    /**
     * @param array{MedicalScribeJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
