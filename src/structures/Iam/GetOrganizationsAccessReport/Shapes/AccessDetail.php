<?php

namespace Sunaoka\Aws\Structures\Iam\GetOrganizationsAccessReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceNamespace
 * @property string $Region
 * @property string $EntityPath
 * @property \Aws\Api\DateTimeResult $LastAuthenticatedTime
 * @property int $TotalAuthenticatedEntities
 */
class AccessDetail extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     ServiceNamespace: string,
     *     Region?: string,
     *     EntityPath?: string,
     *     LastAuthenticatedTime?: \Aws\Api\DateTimeResult,
     *     TotalAuthenticatedEntities?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
