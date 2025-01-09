<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property RuleRevision $currentRevision
 * @property RuleExecution $latestExecution
 * @property string $entityUrl
 * @property string $revisionUrl
 */
class RuleState extends Shape
{
    /**
     * @param array{
     *     ruleName?: string,
     *     currentRevision?: RuleRevision,
     *     latestExecution?: RuleExecution,
     *     entityUrl?: string,
     *     revisionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
