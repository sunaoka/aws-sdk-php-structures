<?php

namespace Sunaoka\Aws\Structures\Panorama\ListPackageImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $JobId
 * @property 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION' $JobType
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class PackageImportJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     JobId?: string,
     *     JobType?: 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION',
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'PENDING'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
