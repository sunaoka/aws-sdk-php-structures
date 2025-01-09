<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $principal
 */
class ListPrincipalThingsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
