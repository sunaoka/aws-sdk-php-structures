<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3BucketPath
 * @property string|null $S3BucketRoleArn
 */
class SCApplicationAttributes extends Shape
{
    /**
     * @param array{
     *     S3BucketPath?: string|null,
     *     S3BucketRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
