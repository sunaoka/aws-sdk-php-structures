<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeManagedJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $description
 * @property string|null $regex
 * @property string|null $example
 * @property bool|null $optional
 */
class DocumentParameter extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     description?: string|null,
     *     regex?: string|null,
     *     example?: string|null,
     *     optional?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
