<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleName
 * @property RuleRevision|null $currentRevision
 * @property RuleExecution|null $latestExecution
 * @property string|null $entityUrl
 * @property string|null $revisionUrl
 */
class RuleState extends Shape
{
    /**
     * @param array{
     *     ruleName?: string|null,
     *     currentRevision?: RuleRevision|null,
     *     latestExecution?: RuleExecution|null,
     *     entityUrl?: string|null,
     *     revisionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
