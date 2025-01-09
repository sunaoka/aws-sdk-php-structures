<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedAdministrators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDelegatedAdministratorsRequest extends Request
{
    /**
     * @param array{
     *     ServicePrincipal?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
