<?php

namespace Sunaoka\Aws\Structures\NimbleStudio;

class NimbleStudioClient extends \Aws\NimbleStudio\NimbleStudioClient
{
    use AcceptEulas\AcceptEulasTrait;
    use CreateLaunchProfile\CreateLaunchProfileTrait;
    use CreateStreamingImage\CreateStreamingImageTrait;
    use CreateStreamingSession\CreateStreamingSessionTrait;
    use CreateStreamingSessionStream\CreateStreamingSessionStreamTrait;
    use CreateStudio\CreateStudioTrait;
    use CreateStudioComponent\CreateStudioComponentTrait;
    use DeleteLaunchProfile\DeleteLaunchProfileTrait;
    use DeleteLaunchProfileMember\DeleteLaunchProfileMemberTrait;
    use DeleteStreamingImage\DeleteStreamingImageTrait;
    use DeleteStreamingSession\DeleteStreamingSessionTrait;
    use DeleteStudio\DeleteStudioTrait;
    use DeleteStudioComponent\DeleteStudioComponentTrait;
    use DeleteStudioMember\DeleteStudioMemberTrait;
    use GetEula\GetEulaTrait;
    use GetLaunchProfile\GetLaunchProfileTrait;
    use GetLaunchProfileDetails\GetLaunchProfileDetailsTrait;
    use GetLaunchProfileInitialization\GetLaunchProfileInitializationTrait;
    use GetLaunchProfileMember\GetLaunchProfileMemberTrait;
    use GetStreamingImage\GetStreamingImageTrait;
    use GetStreamingSession\GetStreamingSessionTrait;
    use GetStreamingSessionBackup\GetStreamingSessionBackupTrait;
    use GetStreamingSessionStream\GetStreamingSessionStreamTrait;
    use GetStudio\GetStudioTrait;
    use GetStudioComponent\GetStudioComponentTrait;
    use GetStudioMember\GetStudioMemberTrait;
    use ListEulaAcceptances\ListEulaAcceptancesTrait;
    use ListEulas\ListEulasTrait;
    use ListLaunchProfileMembers\ListLaunchProfileMembersTrait;
    use ListLaunchProfiles\ListLaunchProfilesTrait;
    use ListStreamingImages\ListStreamingImagesTrait;
    use ListStreamingSessionBackups\ListStreamingSessionBackupsTrait;
    use ListStreamingSessions\ListStreamingSessionsTrait;
    use ListStudioComponents\ListStudioComponentsTrait;
    use ListStudioMembers\ListStudioMembersTrait;
    use ListStudios\ListStudiosTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutLaunchProfileMembers\PutLaunchProfileMembersTrait;
    use PutStudioMembers\PutStudioMembersTrait;
    use StartStreamingSession\StartStreamingSessionTrait;
    use StartStudioSSOConfigurationRepair\StartStudioSSOConfigurationRepairTrait;
    use StopStreamingSession\StopStreamingSessionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLaunchProfile\UpdateLaunchProfileTrait;
    use UpdateLaunchProfileMember\UpdateLaunchProfileMemberTrait;
    use UpdateStreamingImage\UpdateStreamingImageTrait;
    use UpdateStudio\UpdateStudioTrait;
    use UpdateStudioComponent\UpdateStudioComponentTrait;
}
