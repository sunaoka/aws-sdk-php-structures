<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sessionId
 * @property string|null $domainId
 * @property string|null $subscriptionId
 * @property 'en-US'|null $languageCode
 * @property int<8000, 48000>|null $mediaSampleRateHertz
 * @property 'pcm'|'flac'|null $mediaEncoding
 * @property list<MedicalScribeChannelDefinition>|null $channelDefinitions
 * @property MedicalScribePostStreamActionSettingsResponse|null $postStreamActionSettings
 * @property MedicalScribePostStreamActionsResult|null $postStreamActionResult
 * @property bool|null $encounterContextProvided
 * @property 'IN_PROGRESS'|'PAUSED'|'FAILED'|'COMPLETED'|null $streamStatus
 * @property \Aws\Api\DateTimeResult|null $streamCreationTime
 * @property \Aws\Api\DateTimeResult|null $streamEndTime
 */
class MedicalScribeListeningSessionDetails extends Shape
{
    /**
     * @param array{
     *     sessionId?: string|null,
     *     domainId?: string|null,
     *     subscriptionId?: string|null,
     *     languageCode?: 'en-US'|null,
     *     mediaSampleRateHertz?: int<8000, 48000>|null,
     *     mediaEncoding?: 'pcm'|'flac'|null,
     *     channelDefinitions?: list<MedicalScribeChannelDefinition>|null,
     *     postStreamActionSettings?: MedicalScribePostStreamActionSettingsResponse|null,
     *     postStreamActionResult?: MedicalScribePostStreamActionsResult|null,
     *     encounterContextProvided?: bool|null,
     *     streamStatus?: 'IN_PROGRESS'|'PAUSED'|'FAILED'|'COMPLETED'|null,
     *     streamCreationTime?: \Aws\Api\DateTimeResult|null,
     *     streamEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
