<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $contactPostPassDurationSeconds
 * @property int $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int $minimumViableContactDurationSeconds
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
     *     contactPostPassDurationSeconds?: int,
     *     contactPrePassDurationSeconds?: int,
     *     dataflowEdges?: list<list<string>>,
     *     minimumViableContactDurationSeconds?: int,
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
