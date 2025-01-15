<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CharacterSetName
 * @property string|null $CharacterSetDescription
 */
class CharacterSet extends Shape
{
    /**
     * @param array{
     *     CharacterSetName?: string|null,
     *     CharacterSetDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
