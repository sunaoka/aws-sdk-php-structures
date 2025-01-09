<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\UpdateIngestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property 'RTMP'|'RTMPS' $ingestProtocol
 * @property string $streamKey
 * @property string $stageArn
 * @property string $participantId
 * @property 'ACTIVE'|'INACTIVE' $state
 * @property string $userId
 * @property array<string, string> $attributes
 * @property array<string, string> $tags
 */
class IngestConfiguration extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn: string,
     *     ingestProtocol: 'RTMP'|'RTMPS',
     *     streamKey: string,
     *     stageArn: string,
     *     participantId: string,
     *     state: 'ACTIVE'|'INACTIVE',
     *     userId?: string,
     *     attributes?: array<string, string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
