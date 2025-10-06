<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $OwningAccountId
 * @property string|null $Region
 * @property string|null $ResourceType
 * @property string|null $Service
 * @property \Aws\Api\DateTimeResult|null $LastReportedAt
 * @property list<ResourceProperty>|null $Properties
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     OwningAccountId?: string|null,
     *     Region?: string|null,
     *     ResourceType?: string|null,
     *     Service?: string|null,
     *     LastReportedAt?: \Aws\Api\DateTimeResult|null,
     *     Properties?: list<ResourceProperty>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
