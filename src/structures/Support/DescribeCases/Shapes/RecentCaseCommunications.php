<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Communication>|null $communications
 * @property string|null $nextToken
 */
class RecentCaseCommunications extends Shape
{
    /**
     * @param array{
     *     communications?: list<Communication>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
