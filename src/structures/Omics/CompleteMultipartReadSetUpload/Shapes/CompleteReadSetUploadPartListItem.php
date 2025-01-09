<?php

namespace Sunaoka\Aws\Structures\Omics\CompleteMultipartReadSetUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $partNumber
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property string $checksum
 */
class CompleteReadSetUploadPartListItem extends Shape
{
    /**
     * @param array{
     *     partNumber: int,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     checksum: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
