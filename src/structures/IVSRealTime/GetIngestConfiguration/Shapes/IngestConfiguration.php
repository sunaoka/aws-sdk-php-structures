<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetIngestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $arn
 * @property 'RTMP'|'RTMPS' $ingestProtocol
 * @property string $streamKey
 * @property string $stageArn
 * @property string $participantId
 * @property 'ACTIVE'|'INACTIVE' $state
 * @property string|null $userId
 * @property array<string, string>|null $attributes
 * @property array<string, string>|null $tags
 */
class IngestConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn: string,
     *     ingestProtocol: 'RTMP'|'RTMPS',
     *     streamKey: string,
     *     stageArn: string,
     *     participantId: string,
     *     state: 'ACTIVE'|'INACTIVE',
     *     userId?: string|null,
     *     attributes?: array<string, string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
