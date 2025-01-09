<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeEventTopics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $TopicNames
 */
class DescribeEventTopicsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     TopicNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
