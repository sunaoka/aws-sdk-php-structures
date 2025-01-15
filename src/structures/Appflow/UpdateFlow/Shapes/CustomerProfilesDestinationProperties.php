<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string|null $objectTypeName
 */
class CustomerProfilesDestinationProperties extends Shape
{
    /**
     * @param array{
     *     domainName: string,
     *     objectTypeName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
