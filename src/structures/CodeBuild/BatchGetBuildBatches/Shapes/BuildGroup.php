<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuildBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property list<string> $dependsOn
 * @property bool $ignoreFailure
 * @property BuildSummary $currentBuildSummary
 * @property list<BuildSummary> $priorBuildSummaryList
 */
class BuildGroup extends Shape
{
    /**
     * @param array{
     *     identifier?: string,
     *     dependsOn?: list<string>,
     *     ignoreFailure?: bool,
     *     currentBuildSummary?: BuildSummary,
     *     priorBuildSummaryList?: list<BuildSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
