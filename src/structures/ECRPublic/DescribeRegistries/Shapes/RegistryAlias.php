<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ACTIVE'|'PENDING'|'REJECTED' $status
 * @property bool $primaryRegistryAlias
 * @property bool $defaultRegistryAlias
 */
class RegistryAlias extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     status: 'ACTIVE'|'PENDING'|'REJECTED',
     *     primaryRegistryAlias: bool,
     *     defaultRegistryAlias: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
