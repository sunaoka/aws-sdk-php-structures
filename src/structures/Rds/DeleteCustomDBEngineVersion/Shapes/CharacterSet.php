<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CharacterSetName
 * @property string $CharacterSetDescription
 */
class CharacterSet extends Shape
{
    /**
     * @param array{
     *     CharacterSetName?: string,
     *     CharacterSetDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
