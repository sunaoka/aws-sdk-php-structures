<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $description
 * @property string $regex
 * @property string $example
 * @property bool $optional
 */
class DocumentParameter extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     description?: string,
     *     regex?: string,
     *     example?: string,
     *     optional?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
