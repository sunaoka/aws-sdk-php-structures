<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedAdministrators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServicePrincipal
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListDelegatedAdministratorsRequest extends Request
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
