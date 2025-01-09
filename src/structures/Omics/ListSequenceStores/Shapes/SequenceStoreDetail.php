<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string $description
 * @property SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $fallbackLocation
 * @property 'MD5up'|'SHA256up'|'SHA512up' $eTagAlgorithmFamily
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class SequenceStoreDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name?: string,
     *     description?: string,
     *     sseConfig?: SseConfig,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     fallbackLocation?: string,
     *     eTagAlgorithmFamily?: 'MD5up'|'SHA256up'|'SHA512up',
     *     status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     statusMessage?: string,
     *     updateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
