<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseClones;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $autonomousDatabaseId
 */
class ListAutonomousDatabaseClonesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     autonomousDatabaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
