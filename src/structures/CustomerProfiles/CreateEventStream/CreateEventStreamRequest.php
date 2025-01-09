<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string $EventStreamName
 * @property array<string, string> $Tags
 */
class CreateEventStreamRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri: string,
     *     EventStreamName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
