<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 */
class ListRelaysRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
