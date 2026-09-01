<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETACHED'|null $SignatureFormat
 */
class SmimeSigningScheme extends Shape
{
    /**
     * @param array{SignatureFormat?: 'DETACHED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
