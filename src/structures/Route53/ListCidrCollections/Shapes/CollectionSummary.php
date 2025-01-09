<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrCollections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property int<1, max> $Version
 */
class CollectionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Version?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
