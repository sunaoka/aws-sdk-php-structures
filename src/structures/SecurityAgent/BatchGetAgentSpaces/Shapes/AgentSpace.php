<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetAgentSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $name
 * @property string|null $description
 * @property AWSResources|null $awsResources
 * @property list<string>|null $targetDomainIds
 * @property CodeReviewSettings|null $codeReviewSettings
 * @property string|null $kmsKeyId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AgentSpace extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     name: string,
     *     description?: string|null,
     *     awsResources?: AWSResources|null,
     *     targetDomainIds?: list<string>|null,
     *     codeReviewSettings?: CodeReviewSettings|null,
     *     kmsKeyId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
