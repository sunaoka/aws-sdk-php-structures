<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackageImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $JobId
 * @property 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION'|null $JobType
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'PENDING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class PackageImportJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     JobId?: string|null,
     *     JobType?: 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION'|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'PENDING'|'SUCCEEDED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
