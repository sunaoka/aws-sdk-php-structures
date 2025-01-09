<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SignKey
 * @property string $KeyFingerprint
 */
class IssuerDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     SignKey?: string,
     *     KeyFingerprint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
