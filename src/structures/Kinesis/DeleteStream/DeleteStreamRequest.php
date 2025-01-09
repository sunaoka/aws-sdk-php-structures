<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property bool $EnforceConsumerDeletion
 * @property string $StreamARN
 */
class DeleteStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     EnforceConsumerDeletion?: bool,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
