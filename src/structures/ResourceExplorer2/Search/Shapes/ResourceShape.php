<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $LastReportedAt
 * @property string|null $OwningAccountId
 * @property list<ResourceProperty>|null $Properties
 * @property string|null $Region
 * @property string|null $ResourceType
 * @property string|null $Service
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     LastReportedAt?: \Aws\Api\DateTimeResult|null,
     *     OwningAccountId?: string|null,
     *     Properties?: list<ResourceProperty>|null,
     *     Region?: string|null,
     *     ResourceType?: string|null,
     *     Service?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
