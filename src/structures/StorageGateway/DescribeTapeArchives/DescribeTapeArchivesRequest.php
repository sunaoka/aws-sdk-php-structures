<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TapeARNs
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class DescribeTapeArchivesRequest extends Request
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
