<?php

namespace Sunaoka\Aws\Structures\Kafka\StartTopicReassignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ClusterArn
 * @property string $TargetInstanceType
 * @property list<string>|null $TopicsToExclude
 * @property list<string> $TopicsToInclude
 */
class StartTopicReassignmentRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterArn: string,
     *     TargetInstanceType: string,
     *     TopicsToExclude?: list<string>|null,
     *     TopicsToInclude: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
