<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiKeyFilter|null $Filter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ApiKeyFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
