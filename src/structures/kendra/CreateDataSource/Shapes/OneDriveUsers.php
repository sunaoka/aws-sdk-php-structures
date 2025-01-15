<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $OneDriveUserList
 * @property S3Path|null $OneDriveUserS3Path
 */
class OneDriveUsers extends Shape
{
    /**
     * @param array{
     *     OneDriveUserList?: list<string>|null,
     *     OneDriveUserS3Path?: S3Path|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
