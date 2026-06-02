<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $RoleArn
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property string $JobConfigSchemaVersion
 * @property string $JobConfigDocument
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     RoleArn: string,
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation',
     *     JobConfigSchemaVersion: string,
     *     JobConfigDocument: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
