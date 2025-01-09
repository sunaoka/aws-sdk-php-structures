<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $contactPostPassDurationSeconds
 * @property int $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int $minimumViableContactDurationSeconds
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
