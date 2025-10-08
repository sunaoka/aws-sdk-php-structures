<?php

namespace Sunaoka\Aws\Structures\MediaTailor;

class MediaTailorClient extends \Aws\MediaTailor\MediaTailorClient
{
    use ConfigureLogsForChannel\ConfigureLogsForChannelTrait;
    use ConfigureLogsForPlaybackConfiguration\ConfigureLogsForPlaybackConfigurationTrait;
    use CreateChannel\CreateChannelTrait;
    use CreateLiveSource\CreateLiveSourceTrait;
    use CreatePrefetchSchedule\CreatePrefetchScheduleTrait;
    use CreateProgram\CreateProgramTrait;
    use CreateSourceLocation\CreateSourceLocationTrait;
    use CreateVodSource\CreateVodSourceTrait;
    use DeleteChannel\DeleteChannelTrait;
    use DeleteChannelPolicy\DeleteChannelPolicyTrait;
    use DeleteLiveSource\DeleteLiveSourceTrait;
    use DeletePlaybackConfiguration\DeletePlaybackConfigurationTrait;
    use DeletePrefetchSchedule\DeletePrefetchScheduleTrait;
    use DeleteProgram\DeleteProgramTrait;
    use DeleteSourceLocation\DeleteSourceLocationTrait;
    use DeleteVodSource\DeleteVodSourceTrait;
    use DescribeChannel\DescribeChannelTrait;
    use DescribeLiveSource\DescribeLiveSourceTrait;
    use DescribeProgram\DescribeProgramTrait;
    use DescribeSourceLocation\DescribeSourceLocationTrait;
    use DescribeVodSource\DescribeVodSourceTrait;
    use GetChannelPolicy\GetChannelPolicyTrait;
    use GetChannelSchedule\GetChannelScheduleTrait;
    use GetPlaybackConfiguration\GetPlaybackConfigurationTrait;
    use GetPrefetchSchedule\GetPrefetchScheduleTrait;
    use ListAlerts\ListAlertsTrait;
    use ListChannels\ListChannelsTrait;
    use ListLiveSources\ListLiveSourcesTrait;
    use ListPlaybackConfigurations\ListPlaybackConfigurationsTrait;
    use ListPrefetchSchedules\ListPrefetchSchedulesTrait;
    use ListSourceLocations\ListSourceLocationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVodSources\ListVodSourcesTrait;
    use PutChannelPolicy\PutChannelPolicyTrait;
    use PutPlaybackConfiguration\PutPlaybackConfigurationTrait;
    use StartChannel\StartChannelTrait;
    use StopChannel\StopChannelTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateChannel\UpdateChannelTrait;
    use UpdateLiveSource\UpdateLiveSourceTrait;
    use UpdateProgram\UpdateProgramTrait;
    use UpdateSourceLocation\UpdateSourceLocationTrait;
    use UpdateVodSource\UpdateVodSourceTrait;
}
