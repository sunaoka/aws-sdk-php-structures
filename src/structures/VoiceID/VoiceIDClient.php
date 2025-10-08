<?php

namespace Sunaoka\Aws\Structures\VoiceID;

class VoiceIDClient extends \Aws\VoiceID\VoiceIDClient
{
    use AssociateFraudster\AssociateFraudsterTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateWatchlist\CreateWatchlistTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteFraudster\DeleteFraudsterTrait;
    use DeleteSpeaker\DeleteSpeakerTrait;
    use DeleteWatchlist\DeleteWatchlistTrait;
    use DescribeDomain\DescribeDomainTrait;
    use DescribeFraudster\DescribeFraudsterTrait;
    use DescribeFraudsterRegistrationJob\DescribeFraudsterRegistrationJobTrait;
    use DescribeSpeaker\DescribeSpeakerTrait;
    use DescribeSpeakerEnrollmentJob\DescribeSpeakerEnrollmentJobTrait;
    use DescribeWatchlist\DescribeWatchlistTrait;
    use DisassociateFraudster\DisassociateFraudsterTrait;
    use EvaluateSession\EvaluateSessionTrait;
    use ListDomains\ListDomainsTrait;
    use ListFraudsterRegistrationJobs\ListFraudsterRegistrationJobsTrait;
    use ListFraudsters\ListFraudstersTrait;
    use ListSpeakerEnrollmentJobs\ListSpeakerEnrollmentJobsTrait;
    use ListSpeakers\ListSpeakersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWatchlists\ListWatchlistsTrait;
    use OptOutSpeaker\OptOutSpeakerTrait;
    use StartFraudsterRegistrationJob\StartFraudsterRegistrationJobTrait;
    use StartSpeakerEnrollmentJob\StartSpeakerEnrollmentJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDomain\UpdateDomainTrait;
    use UpdateWatchlist\UpdateWatchlistTrait;
}
