<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BOOL
 * @property int $N
 * @property string $S
 * @property list<string> $SS
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     BOOL?: bool,
     *     N?: int,
     *     S?: string,
     *     SS?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
