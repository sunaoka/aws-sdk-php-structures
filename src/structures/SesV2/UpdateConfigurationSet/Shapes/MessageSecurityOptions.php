<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SigningScheme|null $SigningScheme
 */
class MessageSecurityOptions extends Shape
{
    /**
     * @param array{SigningScheme?: SigningScheme|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
