<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TranscriptionJobName
 */
class GetTranscriptionJobRequest extends Request
{
    /**
     * @param array{TranscriptionJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
