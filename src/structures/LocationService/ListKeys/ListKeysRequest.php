<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ApiKeyFilter $Filter
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Filter?: Shapes\ApiKeyFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
