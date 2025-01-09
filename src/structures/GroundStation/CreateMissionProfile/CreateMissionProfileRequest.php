<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 21600> $contactPostPassDurationSeconds
 * @property int<0, 21600> $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int<1, 21600> $minimumViableContactDurationSeconds
 * @property string $name
 * @property Shapes\KmsKey $streamsKmsKey
 * @property string $streamsKmsRole
 * @property array<string, string> $tags
 * @property string $trackingConfigArn
 */
class CreateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<0, 21600>,
     *     contactPrePassDurationSeconds?: int<0, 21600>,
     *     dataflowEdges: list<list<string>>,
     *     minimumViableContactDurationSeconds: int<1, 21600>,
     *     name: string,
     *     streamsKmsKey?: Shapes\KmsKey,
     *     streamsKmsRole?: string,
     *     tags?: array<string, string>,
     *     trackingConfigArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
