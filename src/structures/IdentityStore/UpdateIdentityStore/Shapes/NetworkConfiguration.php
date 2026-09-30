<?php

namespace Sunaoka\Aws\Structures\IdentityStore\UpdateIdentityStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $VpceAccessRequired
 * @property list<string>|null $ApiRestrictSourceVpcs
 * @property list<string>|null $ApiAllowSourceIps
 * @property list<string>|null $ScimAllowSourceIps
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     VpceAccessRequired: bool,
     *     ApiRestrictSourceVpcs?: list<string>|null,
     *     ApiAllowSourceIps?: list<string>|null,
     *     ScimAllowSourceIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
