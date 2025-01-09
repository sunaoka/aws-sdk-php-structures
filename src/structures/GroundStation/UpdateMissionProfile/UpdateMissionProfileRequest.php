<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 21600> $contactPostPassDurationSeconds
 * @property int<0, 21600> $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int<1, 21600> $minimumViableContactDurationSeconds
 * @property string $missionProfileId
 * @property string $name
 * @property Shapes\KmsKey $streamsKmsKey
 * @property string $streamsKmsRole
 * @property string $trackingConfigArn
 */
class UpdateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<0, 21600>,
     *     contactPrePassDurationSeconds?: int<0, 21600>,
     *     dataflowEdges?: list<list<string>>,
     *     minimumViableContactDurationSeconds?: int<1, 21600>,
     *     missionProfileId: string,
     *     name?: string,
     *     streamsKmsKey?: Shapes\KmsKey,
     *     streamsKmsRole?: string,
     *     trackingConfigArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
