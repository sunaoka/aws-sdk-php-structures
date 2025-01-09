<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $OneDriveUserList
 * @property S3Path $OneDriveUserS3Path
 */
class OneDriveUsers extends Shape
{
    /**
     * @param array{
     *     OneDriveUserList?: list<string>,
     *     OneDriveUserS3Path?: S3Path
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
