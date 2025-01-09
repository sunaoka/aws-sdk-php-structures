<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property ResourceDataSyncAwsOrganizationsSource $AwsOrganizationsSource
 * @property list<string> $SourceRegions
 * @property bool $IncludeFutureRegions
 * @property bool $EnableAllOpsDataSources
 */
class ResourceDataSyncSource extends Shape
{
    /**
     * @param array{
     *     SourceType: string,
     *     AwsOrganizationsSource?: ResourceDataSyncAwsOrganizationsSource,
     *     SourceRegions: list<string>,
     *     IncludeFutureRegions?: bool,
     *     EnableAllOpsDataSources?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
