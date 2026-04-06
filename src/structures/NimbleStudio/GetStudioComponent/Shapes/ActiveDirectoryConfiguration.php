<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ActiveDirectoryComputerAttribute>|null $computerAttributes
 * @property string|null $directoryId
 * @property string|null $organizationalUnitDistinguishedName
 */
class ActiveDirectoryConfiguration extends Shape
{
    /**
     * @param array{
     *     computerAttributes?: list<ActiveDirectoryComputerAttribute>|null,
     *     directoryId?: string|null,
     *     organizationalUnitDistinguishedName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
