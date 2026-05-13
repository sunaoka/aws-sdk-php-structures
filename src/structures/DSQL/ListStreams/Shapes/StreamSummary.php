<?php

namespace Sunaoka\Aws\Structures\DSQL\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterIdentifier
 * @property string $streamIdentifier
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|'IMPAIRED' $status
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     streamIdentifier: string,
     *     arn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|'IMPAIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
