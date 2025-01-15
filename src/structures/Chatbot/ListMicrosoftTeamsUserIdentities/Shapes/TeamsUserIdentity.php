<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsUserIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IamRoleArn
 * @property string $ChatConfigurationArn
 * @property string $TeamId
 * @property string|null $UserId
 * @property string|null $AwsUserIdentity
 * @property string|null $TeamsChannelId
 * @property string|null $TeamsTenantId
 */
class TeamsUserIdentity extends Shape
{
    /**
     * @param array{
     *     IamRoleArn: string,
     *     ChatConfigurationArn: string,
     *     TeamId: string,
     *     UserId?: string|null,
     *     AwsUserIdentity?: string|null,
     *     TeamsChannelId?: string|null,
     *     TeamsTenantId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
