<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $missionProfileId
 * @property string|null $name
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<1, 21600>|null $minimumViableContactDurationSeconds
 * @property list<list<string>>|null $dataflowEdges
 * @property string|null $trackingConfigArn
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 */
class UpdateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     missionProfileId: string,
     *     name?: string|null,
     *     contactPrePassDurationSeconds?: int<0, 21600>|null,
     *     contactPostPassDurationSeconds?: int<0, 21600>|null,
     *     minimumViableContactDurationSeconds?: int<1, 21600>|null,
     *     dataflowEdges?: list<list<string>>|null,
     *     trackingConfigArn?: string|null,
     *     streamsKmsKey?: Shapes\KmsKey|null,
     *     streamsKmsRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
