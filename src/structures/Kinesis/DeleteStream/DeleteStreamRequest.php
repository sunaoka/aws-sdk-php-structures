<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property bool|null $EnforceConsumerDeletion
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class DeleteStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     EnforceConsumerDeletion?: bool|null,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
