<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property string|null $description
 * @property string|null $changeDescription
 * @property 'BUILD'|'TEST'|'DISTRIBUTION'|null $type
 * @property string|null $owner
 * @property WorkflowState|null $state
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 */
class WorkflowSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION'|null,
     *     owner?: string|null,
     *     state?: WorkflowState|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
