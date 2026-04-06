<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $CreatorRequestId
 * @property array<string, string>|null $Attributes
 * @property string|null $CreatedByAccount
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CreatorRequestId?: string|null,
     *     Attributes?: array<string, string>|null,
     *     CreatedByAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
