<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
