<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDimension;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string> $stringValues
 */
class UpdateDimensionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     stringValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
