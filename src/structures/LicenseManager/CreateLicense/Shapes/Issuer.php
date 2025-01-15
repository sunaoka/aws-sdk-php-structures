<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $SignKey
 */
class Issuer extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SignKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
