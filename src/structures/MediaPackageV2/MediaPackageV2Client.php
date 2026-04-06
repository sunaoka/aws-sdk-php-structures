<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2;

class MediaPackageV2Client extends \Aws\MediaPackageV2\MediaPackageV2Client
{
    use CreateChannel\CreateChannelTrait;
    use CreateChannelGroup\CreateChannelGroupTrait;
    use CreateOriginEndpoint\CreateOriginEndpointTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteChannelGroup\DeleteChannelGroupTrait;
    use DeleteChannelPolicy\DeleteChannelPolicyTrait;
    use DeleteOriginEndpoint\DeleteOriginEndpointTrait;
    use DeleteOriginEndpointPolicy\DeleteOriginEndpointPolicyTrait;
    use GetChannel\GetChannelTrait;
    use GetChannelGroup\GetChannelGroupTrait;
    use GetChannelPolicy\GetChannelPolicyTrait;
    use GetOriginEndpoint\GetOriginEndpointTrait;
    use GetOriginEndpointPolicy\GetOriginEndpointPolicyTrait;
    use ListChannelGroups\ListChannelGroupsTrait;
    use ListChannels\ListChannelsTrait;
    use ListOriginEndpoints\ListOriginEndpointsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutChannelPolicy\PutChannelPolicyTrait;
    use PutOriginEndpointPolicy\PutOriginEndpointPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateChannelGroup\UpdateChannelGroupTrait;
    use UpdateOriginEndpoint\UpdateOriginEndpointTrait;
}
