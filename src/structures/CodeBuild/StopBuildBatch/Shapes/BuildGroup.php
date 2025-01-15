<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property list<string>|null $dependsOn
 * @property bool|null $ignoreFailure
 * @property BuildSummary|null $currentBuildSummary
 * @property list<BuildSummary>|null $priorBuildSummaryList
 */
class BuildGroup extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     dependsOn?: list<string>|null,
     *     ignoreFailure?: bool|null,
     *     currentBuildSummary?: BuildSummary|null,
     *     priorBuildSummaryList?: list<BuildSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
