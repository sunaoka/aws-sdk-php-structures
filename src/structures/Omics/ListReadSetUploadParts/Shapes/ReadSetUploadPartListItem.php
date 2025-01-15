<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $partNumber
 * @property int<1, 5368709120> $partSize
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property string $checksum
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 */
class ReadSetUploadPartListItem extends Shape
{
    /**
     * @param array{
     *     partNumber: int<1, 10000>,
     *     partSize: int<1, 5368709120>,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     checksum: string,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
