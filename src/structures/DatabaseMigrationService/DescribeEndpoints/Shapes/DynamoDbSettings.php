<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceAccessRoleArn
 */
class DynamoDbSettings extends Shape
{
    /**
     * @param array{ServiceAccessRoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
