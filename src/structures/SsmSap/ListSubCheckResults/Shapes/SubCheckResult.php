<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property list<string>|null $References
 */
class SubCheckResult extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     References?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
