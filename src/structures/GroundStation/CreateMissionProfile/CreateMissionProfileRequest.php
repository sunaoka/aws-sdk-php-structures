<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int<1, 21600> $minimumViableContactDurationSeconds
 * @property string $name
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 * @property array<string, string>|null $tags
 * @property string $trackingConfigArn
 */
class CreateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<0, 21600>|null,
     *     contactPrePassDurationSeconds?: int<0, 21600>|null,
     *     dataflowEdges: list<list<string>>,
     *     minimumViableContactDurationSeconds: int<1, 21600>,
     *     name: string,
     *     streamsKmsKey?: Shapes\KmsKey|null,
     *     streamsKmsRole?: string|null,
     *     tags?: array<string, string>|null,
     *     trackingConfigArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
