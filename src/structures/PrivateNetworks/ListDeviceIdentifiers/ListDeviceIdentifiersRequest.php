<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListDeviceIdentifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS'|'ORDER'|'TRAFFIC_GROUP', list<string>> $filters
 * @property int $maxResults
 * @property string $networkArn
 * @property string $startToken
 */
class ListDeviceIdentifiersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS'|'ORDER'|'TRAFFIC_GROUP', list<string>>,
     *     maxResults?: int,
     *     networkArn: string,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
