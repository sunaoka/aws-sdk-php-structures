<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property Shapes\TopicV2Details $Topic
 * @property Shapes\CustomInstructions|null $CustomInstructions
 * @property 'DRAFT'|'PUBLISH'|null $PublishOption
 */
class UpdateTopicV2Request extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     Topic: Shapes\TopicV2Details,
     *     CustomInstructions?: Shapes\CustomInstructions|null,
     *     PublishOption?: 'DRAFT'|'PUBLISH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
