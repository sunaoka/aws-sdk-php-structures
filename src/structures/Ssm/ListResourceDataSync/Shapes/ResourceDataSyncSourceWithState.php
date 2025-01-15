<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property ResourceDataSyncAwsOrganizationsSource|null $AwsOrganizationsSource
 * @property list<string>|null $SourceRegions
 * @property bool|null $IncludeFutureRegions
 * @property string|null $State
 * @property bool|null $EnableAllOpsDataSources
 */
class ResourceDataSyncSourceWithState extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     AwsOrganizationsSource?: ResourceDataSyncAwsOrganizationsSource|null,
     *     SourceRegions?: list<string>|null,
     *     IncludeFutureRegions?: bool|null,
     *     State?: string|null,
     *     EnableAllOpsDataSources?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
