<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackUserIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $ChatConfigurationArn
 * @property string $SlackTeamId
 * @property string $SlackUserId
 * @property string|null $AwsUserIdentity
 */
class SlackUserIdentity extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     ChatConfigurationArn: string,
     *     SlackTeamId: string,
     *     SlackUserId: string,
     *     AwsUserIdentity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
