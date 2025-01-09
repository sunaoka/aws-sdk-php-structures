<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Value
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int<0, max> $ValueInIA
 * @property int<0, max> $ValueInStandard
 * @property int<0, max> $ValueInArchive
 */
class FileSystemSize extends Shape
{
    /**
     * @param array{
     *     Value: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     ValueInIA?: int<0, max>,
     *     ValueInStandard?: int<0, max>,
     *     ValueInArchive?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
