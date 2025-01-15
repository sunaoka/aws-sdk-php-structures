<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property int<1, max>|null $Version
 */
class CollectionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Version?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
