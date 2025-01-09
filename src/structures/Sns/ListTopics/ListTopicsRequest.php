<?php

namespace Sunaoka\Aws\Structures\Sns\ListTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListTopicsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
