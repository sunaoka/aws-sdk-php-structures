<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $description
 * @property string $changeDescription
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 * @property string $owner
 * @property WorkflowState $state
 * @property string $dateCreated
 * @property array<string, string> $tags
 */
class WorkflowSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     description?: string,
     *     changeDescription?: string,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION',
     *     owner?: string,
     *     state?: WorkflowState,
     *     dateCreated?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
