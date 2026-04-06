<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 * @property Shapes\Options|null $OverrideOptions
 * @property list<Shapes\FilterRule>|null $Includes
 * @property list<Shapes\FilterRule>|null $Excludes
 * @property Shapes\ManifestConfig|null $ManifestConfig
 * @property Shapes\TaskReportConfig|null $TaskReportConfig
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class StartTaskExecutionRequest extends Request
{
    /**
     * @param array{
     *     TaskArn: string,
     *     OverrideOptions?: Shapes\Options|null,
     *     Includes?: list<Shapes\FilterRule>|null,
     *     Excludes?: list<Shapes\FilterRule>|null,
     *     ManifestConfig?: Shapes\ManifestConfig|null,
     *     TaskReportConfig?: Shapes\TaskReportConfig|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
