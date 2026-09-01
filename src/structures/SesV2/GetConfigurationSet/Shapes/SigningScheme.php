<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultSigningScheme|null $DefaultScheme
 * @property SmimeSigningScheme|null $SmimeScheme
 */
class SigningScheme extends Shape
{
    /**
     * @param array{
     *     DefaultScheme?: DefaultSigningScheme|null,
     *     SmimeScheme?: SmimeSigningScheme|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
