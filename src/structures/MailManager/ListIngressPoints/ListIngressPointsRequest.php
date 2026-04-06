<?php

namespace Sunaoka\Aws\Structures\MailManager\ListIngressPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $PageSize
 * @property string|null $NextToken
 */
class ListIngressPointsRequest extends Request
{
    /**
     * @param array{
     *     PageSize?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
