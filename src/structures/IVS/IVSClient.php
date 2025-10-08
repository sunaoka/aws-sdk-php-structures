<?php

namespace Sunaoka\Aws\Structures\IVS;

class IVSClient extends \Aws\IVS\IVSClient
{
    use BatchGetChannel\BatchGetChannelTrait;
    use BatchGetStreamKey\BatchGetStreamKeyTrait;
    use BatchStartViewerSessionRevocation\BatchStartViewerSessionRevocationTrait;
    use CreateChannel\CreateChannelTrait;
    use CreatePlaybackRestrictionPolicy\CreatePlaybackRestrictionPolicyTrait;
    use CreateRecordingConfiguration\CreateRecordingConfigurationTrait;
    use CreateStreamKey\CreateStreamKeyTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeletePlaybackKeyPair\DeletePlaybackKeyPairTrait;
    use DeletePlaybackRestrictionPolicy\DeletePlaybackRestrictionPolicyTrait;
    use DeleteRecordingConfiguration\DeleteRecordingConfigurationTrait;
    use DeleteStreamKey\DeleteStreamKeyTrait;
    use GetChannel\GetChannelTrait;
    use GetPlaybackKeyPair\GetPlaybackKeyPairTrait;
    use GetPlaybackRestrictionPolicy\GetPlaybackRestrictionPolicyTrait;
    use GetRecordingConfiguration\GetRecordingConfigurationTrait;
    use GetStream\GetStreamTrait;
    use GetStreamKey\GetStreamKeyTrait;
    use GetStreamSession\GetStreamSessionTrait;
    use ImportPlaybackKeyPair\ImportPlaybackKeyPairTrait;
    use ListChannels\ListChannelsTrait;
    use ListPlaybackKeyPairs\ListPlaybackKeyPairsTrait;
    use ListPlaybackRestrictionPolicies\ListPlaybackRestrictionPoliciesTrait;
    use ListRecordingConfigurations\ListRecordingConfigurationsTrait;
    use ListStreamKeys\ListStreamKeysTrait;
    use ListStreamSessions\ListStreamSessionsTrait;
    use ListStreams\ListStreamsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutMetadata\PutMetadataTrait;
    use StartViewerSessionRevocation\StartViewerSessionRevocationTrait;
    use StopStream\StopStreamTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdatePlaybackRestrictionPolicy\UpdatePlaybackRestrictionPolicyTrait;
}
