<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property string|null $description
 * @property string|null $changeDescription
 * @property 'BUILD'|'TEST'|'DISTRIBUTION'|null $type
 * @property WorkflowState|null $state
 * @property string|null $owner
 * @property string|null $data
 * @property string|null $kmsKeyId
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 * @property list<WorkflowParameterDetail>|null $parameters
 */
class Workflow extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION'|null,
     *     state?: WorkflowState|null,
     *     owner?: string|null,
     *     data?: string|null,
     *     kmsKeyId?: string|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null,
     *     parameters?: list<WorkflowParameterDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
