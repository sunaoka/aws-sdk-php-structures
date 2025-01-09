<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteTranscriptionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TranscriptionJobName
 */
class DeleteTranscriptionJobRequest extends Request
{
    /**
     * @param array{TranscriptionJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
