<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListCodeScansRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
