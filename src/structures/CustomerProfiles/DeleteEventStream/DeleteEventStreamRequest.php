<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteEventStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EventStreamName
 */
class DeleteEventStreamRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EventStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
