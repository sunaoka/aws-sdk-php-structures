<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteLanguageModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DeleteLanguageModelRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
