<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataLocation
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class LastSuccessfulReplicatedUpdate extends Shape
{
    /**
     * @param array{
     *     metadataLocation: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
