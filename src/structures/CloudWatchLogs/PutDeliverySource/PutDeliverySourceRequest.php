<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliverySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $resourceArn
 * @property string $logType
 * @property array<string, string>|null $tags
 */
class PutDeliverySourceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourceArn: string,
     *     logType: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
