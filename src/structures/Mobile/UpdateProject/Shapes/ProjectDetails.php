<?php

namespace Sunaoka\Aws\Structures\Mobile\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $projectId
 * @property string|null $region
 * @property 'NORMAL'|'SYNCING'|'IMPORTING'|null $state
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property string|null $consoleUrl
 * @property list<ResourceShape>|null $resources
 */
class ProjectDetails extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     projectId?: string|null,
     *     region?: string|null,
     *     state?: 'NORMAL'|'SYNCING'|'IMPORTING'|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     consoleUrl?: string|null,
     *     resources?: list<ResourceShape>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
