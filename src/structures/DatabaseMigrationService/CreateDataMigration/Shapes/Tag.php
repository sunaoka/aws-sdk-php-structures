<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property string|null $ResourceArn
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
