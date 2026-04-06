<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $missionProfileId
 * @property string|null $missionProfileArn
 * @property string|null $name
 * @property string|null $region
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<1, 21600>|null $minimumViableContactDurationSeconds
 * @property list<list<string>>|null $dataflowEdges
 * @property string|null $trackingConfigArn
 * @property string|null $telemetrySinkConfigArn
 * @property array<string, string>|null $tags
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 */
class GetMissionProfileResponse extends Response
{
}
