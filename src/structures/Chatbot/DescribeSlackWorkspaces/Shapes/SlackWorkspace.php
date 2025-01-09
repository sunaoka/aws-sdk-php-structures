<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SlackTeamId
 * @property string $SlackTeamName
 * @property string $State
 * @property string $StateReason
 */
class SlackWorkspace extends Shape
{
    /**
     * @param array{
     *     SlackTeamId: string,
     *     SlackTeamName: string,
     *     State?: string,
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
