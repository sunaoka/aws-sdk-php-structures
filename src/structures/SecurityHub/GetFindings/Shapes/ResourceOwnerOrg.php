<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 */
class ResourceOwnerOrg extends Shape
{
    /**
     * @param array{Id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
