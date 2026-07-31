<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeConnectionArn
 * @property string|null $defaultBranch
 */
class GitPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     codeConnectionArn?: string|null,
     *     defaultBranch?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
