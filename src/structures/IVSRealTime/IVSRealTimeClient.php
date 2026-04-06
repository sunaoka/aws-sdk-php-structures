<?php

namespace Sunaoka\Aws\Structures\IVSRealTime;

class IVSRealTimeClient extends \Aws\IVSRealTime\IVSRealTimeClient
{
    use CreateEncoderConfiguration\CreateEncoderConfigurationTrait;
    use CreateParticipantToken\CreateParticipantTokenTrait;
    use CreateStage\CreateStageTrait;
    use CreateStorageConfiguration\CreateStorageConfigurationTrait;
    use DeleteEncoderConfiguration\DeleteEncoderConfigurationTrait;
    use DeletePublicKey\DeletePublicKeyTrait;
    use DeleteStage\DeleteStageTrait;
    use DeleteStorageConfiguration\DeleteStorageConfigurationTrait;
    use DisconnectParticipant\DisconnectParticipantTrait;
    use GetComposition\GetCompositionTrait;
    use GetEncoderConfiguration\GetEncoderConfigurationTrait;
    use GetParticipant\GetParticipantTrait;
    use GetPublicKey\GetPublicKeyTrait;
    use GetStage\GetStageTrait;
    use GetStageSession\GetStageSessionTrait;
    use GetStorageConfiguration\GetStorageConfigurationTrait;
    use ImportPublicKey\ImportPublicKeyTrait;
    use ListCompositions\ListCompositionsTrait;
    use ListEncoderConfigurations\ListEncoderConfigurationsTrait;
    use ListParticipantEvents\ListParticipantEventsTrait;
    use ListParticipants\ListParticipantsTrait;
    use ListPublicKeys\ListPublicKeysTrait;
    use ListStageSessions\ListStageSessionsTrait;
    use ListStages\ListStagesTrait;
    use ListStorageConfigurations\ListStorageConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartComposition\StartCompositionTrait;
    use StopComposition\StopCompositionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateStage\UpdateStageTrait;
}
