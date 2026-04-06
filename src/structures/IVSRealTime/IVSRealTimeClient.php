<?php

namespace Sunaoka\Aws\Structures\IVSRealTime;

class IVSRealTimeClient extends \Aws\IVSRealTime\IVSRealTimeClient
{
    use CreateParticipantToken\CreateParticipantTokenTrait;
    use CreateStage\CreateStageTrait;
    use DeleteStage\DeleteStageTrait;
    use DisconnectParticipant\DisconnectParticipantTrait;
    use GetParticipant\GetParticipantTrait;
    use GetStage\GetStageTrait;
    use GetStageSession\GetStageSessionTrait;
    use ListParticipantEvents\ListParticipantEventsTrait;
    use ListParticipants\ListParticipantsTrait;
    use ListStageSessions\ListStageSessionsTrait;
    use ListStages\ListStagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateStage\UpdateStageTrait;
}
