<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property string $DistributionId
 * @property string $AccountId
 */
class ConflictingAlias extends Shape
{
    /**
     * @param array{
     *     Alias?: string,
     *     DistributionId?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
