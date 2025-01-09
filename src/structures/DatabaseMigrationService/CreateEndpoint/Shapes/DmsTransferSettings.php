<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 * @property string $BucketName
 */
class DmsTransferSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string,
     *     BucketName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
