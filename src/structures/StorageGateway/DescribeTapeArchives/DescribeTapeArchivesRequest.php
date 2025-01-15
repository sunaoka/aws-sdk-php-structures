<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TapeARNs
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class DescribeTapeArchivesRequest extends Request
{
    /**
     * @param array{
     *     TapeARNs?: list<string>|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
