<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property list<list<string>>|null $dataflowEdges
 * @property int<1, 21600>|null $minimumViableContactDurationSeconds
 * @property string $missionProfileId
 * @property string|null $name
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 * @property string|null $trackingConfigArn
 */
class UpdateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<0, 21600>|null,
     *     contactPrePassDurationSeconds?: int<0, 21600>|null,
     *     dataflowEdges?: list<list<string>>|null,
     *     minimumViableContactDurationSeconds?: int<1, 21600>|null,
     *     missionProfileId: string,
     *     name?: string|null,
     *     streamsKmsKey?: Shapes\KmsKey|null,
     *     streamsKmsRole?: string|null,
     *     trackingConfigArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
