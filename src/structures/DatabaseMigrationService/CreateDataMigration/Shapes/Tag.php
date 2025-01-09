<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property string $ResourceArn
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
