<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string> $TapeARNs
 * @property string $Marker
 * @property int $Limit
 */
class DescribeTapesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
