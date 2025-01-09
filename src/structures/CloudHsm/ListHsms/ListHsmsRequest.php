<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListHsms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListHsmsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
