<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string $principal
 */
class ListPrincipalThingsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
