<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TapeARNs
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class ListTapesRequest extends Request
{
    /**
     * @param array{
     *     TapeARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
