<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeregisterEventTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $TopicName
 */
class DeregisterEventTopicRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     TopicName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
