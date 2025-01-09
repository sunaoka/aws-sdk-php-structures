<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ObjectIdentifier> $Objects
 * @property bool $Quiet
 */
class Delete extends Shape
{
    /**
     * @param array{
     *     Objects: list<ObjectIdentifier>,
     *     Quiet?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
