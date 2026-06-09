<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseCharacterSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'DATABASE'|'NATIONAL'|null $characterSetType
 */
class ListAutonomousDatabaseCharacterSetsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     characterSetType?: 'DATABASE'|'NATIONAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
