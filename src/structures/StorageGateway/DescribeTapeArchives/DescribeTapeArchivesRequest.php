<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TapeARNs
 * @property string $Marker
 * @property int $Limit
 */
class DescribeTapeArchivesRequest extends Request
{
    /**
     * @param array{
     *     TapeARNs?: list<string>,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
