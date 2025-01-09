<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Communication> $communications
 * @property string $nextToken
 */
class RecentCaseCommunications extends Shape
{
    /**
     * @param array{
     *     communications?: list<Communication>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
