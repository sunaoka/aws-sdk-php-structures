<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property ResourceDataSyncAwsOrganizationsSource $AwsOrganizationsSource
 * @property list<string> $SourceRegions
 * @property bool $IncludeFutureRegions
 * @property string $State
 * @property bool $EnableAllOpsDataSources
 */
class ResourceDataSyncSourceWithState extends Shape
{
    /**
     * @param array{
     *     SourceType?: string,
     *     AwsOrganizationsSource?: ResourceDataSyncAwsOrganizationsSource,
     *     SourceRegions?: list<string>,
     *     IncludeFutureRegions?: bool,
     *     State?: string,
     *     EnableAllOpsDataSources?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
