<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property SseConfig|null $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $fallbackLocation
 * @property 'MD5up'|'SHA256up'|'SHA512up'|null $eTagAlgorithmFamily
 */
class SequenceStoreDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     sseConfig?: SseConfig|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     fallbackLocation?: string|null,
     *     eTagAlgorithmFamily?: 'MD5up'|'SHA256up'|'SHA512up'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
