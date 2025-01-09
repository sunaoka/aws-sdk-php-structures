<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketPath
 * @property string $S3BucketRoleArn
 */
class SCApplicationAttributes extends Shape
{
    /**
     * @param array{
     *     S3BucketPath?: string,
     *     S3BucketRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
