<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity;

class ChimeSDKIdentityClient extends \Aws\ChimeSDKIdentity\ChimeSDKIdentityClient
{
    use CreateAppInstance\CreateAppInstanceTrait;
    use CreateAppInstanceAdmin\CreateAppInstanceAdminTrait;
    use CreateAppInstanceBot\CreateAppInstanceBotTrait;
    use CreateAppInstanceUser\CreateAppInstanceUserTrait;
    use DeleteAppInstance\DeleteAppInstanceTrait;
    use DeleteAppInstanceAdmin\DeleteAppInstanceAdminTrait;
    use DeleteAppInstanceBot\DeleteAppInstanceBotTrait;
    use DeleteAppInstanceUser\DeleteAppInstanceUserTrait;
    use DeregisterAppInstanceUserEndpoint\DeregisterAppInstanceUserEndpointTrait;
    use DescribeAppInstance\DescribeAppInstanceTrait;
    use DescribeAppInstanceAdmin\DescribeAppInstanceAdminTrait;
    use DescribeAppInstanceBot\DescribeAppInstanceBotTrait;
    use DescribeAppInstanceUser\DescribeAppInstanceUserTrait;
    use DescribeAppInstanceUserEndpoint\DescribeAppInstanceUserEndpointTrait;
    use GetAppInstanceRetentionSettings\GetAppInstanceRetentionSettingsTrait;
    use ListAppInstanceAdmins\ListAppInstanceAdminsTrait;
    use ListAppInstanceBots\ListAppInstanceBotsTrait;
    use ListAppInstanceUserEndpoints\ListAppInstanceUserEndpointsTrait;
    use ListAppInstanceUsers\ListAppInstanceUsersTrait;
    use ListAppInstances\ListAppInstancesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAppInstanceRetentionSettings\PutAppInstanceRetentionSettingsTrait;
    use PutAppInstanceUserExpirationSettings\PutAppInstanceUserExpirationSettingsTrait;
    use RegisterAppInstanceUserEndpoint\RegisterAppInstanceUserEndpointTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAppInstance\UpdateAppInstanceTrait;
    use UpdateAppInstanceBot\UpdateAppInstanceBotTrait;
    use UpdateAppInstanceUser\UpdateAppInstanceUserTrait;
    use UpdateAppInstanceUserEndpoint\UpdateAppInstanceUserEndpointTrait;
}
