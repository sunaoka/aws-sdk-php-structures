<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalScribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalScribeJobName
 */
class GetMedicalScribeJobRequest extends Request
{
    /**
     * @param array{MedicalScribeJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
