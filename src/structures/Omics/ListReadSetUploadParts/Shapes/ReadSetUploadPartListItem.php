<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $partNumber
 * @property int $partSize
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property string $checksum
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class ReadSetUploadPartListItem extends Shape
{
    /**
     * @param array{
     *     partNumber: int,
     *     partSize: int,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     checksum: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
