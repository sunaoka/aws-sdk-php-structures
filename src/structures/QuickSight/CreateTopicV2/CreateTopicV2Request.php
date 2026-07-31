<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property Shapes\TopicV2Details $Topic
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $FolderArns
 * @property Shapes\CustomInstructions|null $CustomInstructions
 */
class CreateTopicV2Request extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Topic: Shapes\TopicV2Details,
     *     Tags?: list<Shapes\Tag>|null,
     *     FolderArns?: list<string>|null,
     *     CustomInstructions?: Shapes\CustomInstructions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
