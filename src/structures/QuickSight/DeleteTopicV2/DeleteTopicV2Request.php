<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTopicV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 */
class DeleteTopicV2Request extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
