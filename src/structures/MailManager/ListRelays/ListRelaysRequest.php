<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $PageSize
 * @property string|null $NextToken
 */
class ListRelaysRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
