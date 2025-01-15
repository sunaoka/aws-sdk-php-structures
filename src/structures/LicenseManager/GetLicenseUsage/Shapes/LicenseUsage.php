<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EntitlementUsage>|null $EntitlementUsages
 */
class LicenseUsage extends Shape
{
    /**
     * @param array{EntitlementUsages?: list<EntitlementUsage>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
