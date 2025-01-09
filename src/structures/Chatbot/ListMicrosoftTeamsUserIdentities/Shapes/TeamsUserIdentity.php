<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsUserIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $ChatConfigurationArn
 * @property string $TeamId
 * @property string $UserId
 * @property string $AwsUserIdentity
 * @property string $TeamsChannelId
 * @property string $TeamsTenantId
 */
class TeamsUserIdentity extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     ChatConfigurationArn: string,
     *     TeamId: string,
     *     UserId?: string,
     *     AwsUserIdentity?: string,
     *     TeamsChannelId?: string,
     *     TeamsTenantId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
