<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property list<string>|null $TapeARNs
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class DescribeTapesRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARNs?: list<string>|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
