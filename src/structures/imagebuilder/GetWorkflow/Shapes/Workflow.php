<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $description
 * @property string $changeDescription
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 * @property WorkflowState $state
 * @property string $owner
 * @property string $data
 * @property string $kmsKeyId
 * @property string $dateCreated
 * @property array<string, string> $tags
 * @property list<WorkflowParameterDetail> $parameters
 */
class Workflow extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     description?: string,
     *     changeDescription?: string,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION',
     *     state?: WorkflowState,
     *     owner?: string,
     *     data?: string,
     *     kmsKeyId?: string,
     *     dateCreated?: string,
     *     tags?: array<string, string>,
     *     parameters?: list<WorkflowParameterDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
