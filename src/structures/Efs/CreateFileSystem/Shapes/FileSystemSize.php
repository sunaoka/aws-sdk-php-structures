<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property int $ValueInIA
 * @property int $ValueInStandard
 * @property int $ValueInArchive
 */
class FileSystemSize extends Shape
{
    /**
     * @param array{
     *     Value: int,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     ValueInIA?: int,
     *     ValueInStandard?: int,
     *     ValueInArchive?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
