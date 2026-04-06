<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ApiKeyFilter|null $Filter
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filter?: Shapes\ApiKeyFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
