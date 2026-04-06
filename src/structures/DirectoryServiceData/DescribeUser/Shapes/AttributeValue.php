<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $BOOL
 * @property int|null $N
 * @property string|null $S
 * @property list<string>|null $SS
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     BOOL?: bool|null,
     *     N?: int|null,
     *     S?: string|null,
     *     SS?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
