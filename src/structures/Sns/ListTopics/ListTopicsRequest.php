<?php

namespace Sunaoka\Aws\Structures\Sns\ListTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListTopicsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
