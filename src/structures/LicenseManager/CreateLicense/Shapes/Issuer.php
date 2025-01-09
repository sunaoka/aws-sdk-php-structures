<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SignKey
 */
class Issuer extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SignKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
