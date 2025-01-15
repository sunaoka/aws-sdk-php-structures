<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property list<list<string>>|null $dataflowEdges
 * @property int<1, 21600>|null $minimumViableContactDurationSeconds
 * @property string|null $missionProfileArn
 * @property string|null $missionProfileId
 * @property string|null $name
 * @property string|null $region
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 * @property array<string, string>|null $tags
 * @property string|null $trackingConfigArn
 */
class GetMissionProfileResponse extends Response
{
}
