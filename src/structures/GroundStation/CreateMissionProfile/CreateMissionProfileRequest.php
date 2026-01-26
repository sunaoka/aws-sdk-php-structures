<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<0, 21600>|null $contactPrePassDurationSeconds
 * @property int<0, 21600>|null $contactPostPassDurationSeconds
 * @property int<1, 21600> $minimumViableContactDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property string $trackingConfigArn
 * @property string|null $telemetrySinkConfigArn
 * @property array<string, string>|null $tags
 * @property Shapes\KmsKey|null $streamsKmsKey
 * @property string|null $streamsKmsRole
 */
class CreateMissionProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     contactPrePassDurationSeconds?: int<0, 21600>|null,
     *     contactPostPassDurationSeconds?: int<0, 21600>|null,
     *     minimumViableContactDurationSeconds: int<1, 21600>,
     *     dataflowEdges: list<list<string>>,
     *     trackingConfigArn: string,
     *     telemetrySinkConfigArn?: string|null,
     *     tags?: array<string, string>|null,
     *     streamsKmsKey?: Shapes\KmsKey|null,
     *     streamsKmsRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
