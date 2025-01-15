<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeEventTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property list<string>|null $TopicNames
 */
class DescribeEventTopicsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     TopicNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
