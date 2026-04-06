<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupId
 * @property list<string> $Subnets
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     SecurityGroupId: string,
     *     Subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
