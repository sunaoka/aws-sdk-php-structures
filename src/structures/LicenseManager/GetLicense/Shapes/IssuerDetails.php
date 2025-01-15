<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $SignKey
 * @property string|null $KeyFingerprint
 */
class IssuerDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     SignKey?: string|null,
     *     KeyFingerprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
