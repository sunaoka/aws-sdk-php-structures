<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\DescribeView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ViewToken
 * @property string $ConnectionToken
 */
class DescribeViewRequest extends Request
{
    /**
     * @param array{
     *     ViewToken: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
