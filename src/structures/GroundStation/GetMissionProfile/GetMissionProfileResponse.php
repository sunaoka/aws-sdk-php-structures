<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 21600> $contactPostPassDurationSeconds
 * @property int<0, 21600> $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int<1, 21600> $minimumViableContactDurationSeconds
 * @property string $missionProfileArn
 * @property string $missionProfileId
 * @property string $name
 * @property string $region
 * @property Shapes\KmsKey $streamsKmsKey
 * @property string $streamsKmsRole
 * @property array<string, string> $tags
 * @property string $trackingConfigArn
 */
class GetMissionProfileResponse extends Response
{
}
