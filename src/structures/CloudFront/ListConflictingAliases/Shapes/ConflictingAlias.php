<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConflictingAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Alias
 * @property string|null $DistributionId
 * @property string|null $AccountId
 */
class ConflictingAlias extends Shape
{
    /**
     * @param array{
     *     Alias?: string|null,
     *     DistributionId?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
