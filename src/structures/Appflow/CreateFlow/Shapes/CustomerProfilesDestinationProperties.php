<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $objectTypeName
 */
class CustomerProfilesDestinationProperties extends Shape
{
    /**
     * @param array{
     *     domainName: string,
     *     objectTypeName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
