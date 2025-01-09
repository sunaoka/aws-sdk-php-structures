<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 * @property Shapes\Options $OverrideOptions
 * @property list<Shapes\FilterRule> $Includes
 * @property list<Shapes\FilterRule> $Excludes
 * @property Shapes\ManifestConfig $ManifestConfig
 * @property Shapes\TaskReportConfig $TaskReportConfig
 * @property list<Shapes\TagListEntry> $Tags
 */
class StartTaskExecutionRequest extends Request
{
    /**
     * @param array{
     *     TaskArn: string,
     *     OverrideOptions?: Shapes\Options,
     *     Includes?: list<Shapes\FilterRule>,
     *     Excludes?: list<Shapes\FilterRule>,
     *     ManifestConfig?: Shapes\ManifestConfig,
     *     TaskReportConfig?: Shapes\TaskReportConfig,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
