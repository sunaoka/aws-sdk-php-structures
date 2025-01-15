<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ServerId
 */
class ListHostKeysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ServerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
