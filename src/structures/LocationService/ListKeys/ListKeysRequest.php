<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\ApiKeyFilter $Filter
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filter?: Shapes\ApiKeyFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
