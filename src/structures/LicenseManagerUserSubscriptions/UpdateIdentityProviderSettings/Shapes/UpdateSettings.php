<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\UpdateIdentityProviderSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AddSubnets
 * @property list<string> $RemoveSubnets
 * @property string $SecurityGroupId
 */
class UpdateSettings extends Shape
{
    /**
     * @param array{
     *     AddSubnets: list<string>,
     *     RemoveSubnets: list<string>,
     *     SecurityGroupId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
