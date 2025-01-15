<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationName
 * @property string $targetArn
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class PutDestinationRequest extends Request
{
    /**
     * @param array{
     *     destinationName: string,
     *     targetArn: string,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
