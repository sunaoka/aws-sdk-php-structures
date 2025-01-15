<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $BucketName
 */
class DmsTransferSettings extends Shape
{
    /**
     * @param array{
     *     ServiceAccessRoleArn?: string|null,
     *     BucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
