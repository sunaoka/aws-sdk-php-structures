<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListIngestConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $arn
 * @property 'RTMP'|'RTMPS' $ingestProtocol
 * @property string $stageArn
 * @property string $participantId
 * @property 'ACTIVE'|'INACTIVE' $state
 * @property string|null $userId
 */
class IngestConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn: string,
     *     ingestProtocol: 'RTMP'|'RTMPS',
     *     stageArn: string,
     *     participantId: string,
     *     state: 'ACTIVE'|'INACTIVE',
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
