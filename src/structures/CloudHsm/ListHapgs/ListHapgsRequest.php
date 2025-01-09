<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListHapgs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListHapgsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
