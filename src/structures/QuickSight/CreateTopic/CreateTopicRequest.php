<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property Shapes\TopicDetails $Topic
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $FolderArns
 */
class CreateTopicRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Topic: Shapes\TopicDetails,
     *     Tags?: list<Shapes\Tag>|null,
     *     FolderArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
