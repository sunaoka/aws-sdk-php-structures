<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property ResourceDataSyncAwsOrganizationsSource|null $AwsOrganizationsSource
 * @property list<string> $SourceRegions
 * @property bool|null $IncludeFutureRegions
 * @property bool|null $EnableAllOpsDataSources
 */
class ResourceDataSyncSource extends Shape
{
    /**
     * @param array{
     *     SourceType: string,
     *     AwsOrganizationsSource?: ResourceDataSyncAwsOrganizationsSource|null,
     *     SourceRegions: list<string>,
     *     IncludeFutureRegions?: bool|null,
     *     EnableAllOpsDataSources?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
