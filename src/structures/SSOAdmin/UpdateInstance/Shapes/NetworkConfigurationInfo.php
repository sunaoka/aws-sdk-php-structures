<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $VpceAccessRequired
 * @property list<string>|null $RestrictSourceVpcs
 * @property list<string>|null $AllowSourceIps
 * @property list<string>|null $ExcludeApplicationArns
 */
class NetworkConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     VpceAccessRequired: bool,
     *     RestrictSourceVpcs?: list<string>|null,
     *     AllowSourceIps?: list<string>|null,
     *     ExcludeApplicationArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
