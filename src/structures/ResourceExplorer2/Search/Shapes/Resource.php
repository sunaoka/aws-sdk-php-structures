<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $LastReportedAt
 * @property string $OwningAccountId
 * @property list<ResourceProperty> $Properties
 * @property string $Region
 * @property string $ResourceType
 * @property string $Service
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     LastReportedAt?: \Aws\Api\DateTimeResult,
     *     OwningAccountId?: string,
     *     Properties?: list<ResourceProperty>,
     *     Region?: string,
     *     ResourceType?: string,
     *     Service?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
