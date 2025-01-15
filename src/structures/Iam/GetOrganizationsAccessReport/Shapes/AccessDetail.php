<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceNamespace
 * @property string|null $Region
 * @property string|null $EntityPath
 * @property \Aws\Api\DateTimeResult|null $LastAuthenticatedTime
 * @property int|null $TotalAuthenticatedEntities
 */
class AccessDetail extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     ServiceNamespace: string,
     *     Region?: string|null,
     *     EntityPath?: string|null,
     *     LastAuthenticatedTime?: \Aws\Api\DateTimeResult|null,
     *     TotalAuthenticatedEntities?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
