<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateMissionProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $contactPostPassDurationSeconds
 * @property int $contactPrePassDurationSeconds
 * @property list<list<string>> $dataflowEdges
 * @property int $minimumViableContactDurationSeconds
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
     *     contactPostPassDurationSeconds?: int,
     *     contactPrePassDurationSeconds?: int,
     *     dataflowEdges: list<list<string>>,
     *     minimumViableContactDurationSeconds: int,
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
