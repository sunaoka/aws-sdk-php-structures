<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Value
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property int<0, max>|null $ValueInIA
 * @property int<0, max>|null $ValueInStandard
 * @property int<0, max>|null $ValueInArchive
 */
class FileSystemSize extends Shape
{
    /**
     * @param array{
     *     Value: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     ValueInIA?: int<0, max>|null,
     *     ValueInStandard?: int<0, max>|null,
     *     ValueInArchive?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
