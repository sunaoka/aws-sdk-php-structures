<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListDeviceIdentifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'STATUS'|'ORDER'|'TRAFFIC_GROUP', list<string>> $filters
 * @property int<1, 20> $maxResults
 * @property string $networkArn
 * @property string $startToken
 */
class ListDeviceIdentifiersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<'STATUS'|'ORDER'|'TRAFFIC_GROUP', list<string>>,
     *     maxResults?: int<1, 20>,
     *     networkArn: string,
     *     startToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
