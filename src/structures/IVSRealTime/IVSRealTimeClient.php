<?php

namespace Sunaoka\Aws\Structures\IVSRealTime;

class IVSRealTimeClient extends \Aws\IVSRealTime\IVSRealTimeClient
{
    use CreateEncoderConfiguration\CreateEncoderConfigurationTrait;
    use CreateIngestConfiguration\CreateIngestConfigurationTrait;
    use CreateParticipantToken\CreateParticipantTokenTrait;
    use CreateStage\CreateStageTrait;
    use CreateStorageConfiguration\CreateStorageConfigurationTrait;
    use DeleteEncoderConfiguration\DeleteEncoderConfigurationTrait;
    use DeleteIngestConfiguration\DeleteIngestConfigurationTrait;
    use DeletePublicKey\DeletePublicKeyTrait;
    use DeleteStage\DeleteStageTrait;
    use DeleteStorageConfiguration\DeleteStorageConfigurationTrait;
    use DisconnectParticipant\DisconnectParticipantTrait;
    use GetComposition\GetCompositionTrait;
    use GetEncoderConfiguration\GetEncoderConfigurationTrait;
    use GetIngestConfiguration\GetIngestConfigurationTrait;
    use GetParticipant\GetParticipantTrait;
    use GetPublicKey\GetPublicKeyTrait;
    use GetStage\GetStageTrait;
    use GetStageSession\GetStageSessionTrait;
    use GetStorageConfiguration\GetStorageConfigurationTrait;
    use ImportPublicKey\ImportPublicKeyTrait;
    use ListCompositions\ListCompositionsTrait;
    use ListEncoderConfigurations\ListEncoderConfigurationsTrait;
    use ListIngestConfigurations\ListIngestConfigurationsTrait;
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
    use UpdateIngestConfiguration\UpdateIngestConfigurationTrait;
    use UpdateStage\UpdateStageTrait;
}
