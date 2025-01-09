<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DescribeLanguageModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DescribeLanguageModelRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
