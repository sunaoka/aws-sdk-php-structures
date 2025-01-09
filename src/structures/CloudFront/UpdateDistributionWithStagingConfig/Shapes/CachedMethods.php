<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<'GET'|'HEAD'|'POST'|'PUT'|'PATCH'|'OPTIONS'|'DELETE'> $Items
 */
class CachedMethods extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items: list<'GET'|'HEAD'|'POST'|'PUT'|'PATCH'|'OPTIONS'|'DELETE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
