<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetKeyGroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Items
 * @property string $Comment
 */
class KeyGroupConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Items: list<string>,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
