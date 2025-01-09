<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string> $TapeARNs
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class DescribeTapesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
