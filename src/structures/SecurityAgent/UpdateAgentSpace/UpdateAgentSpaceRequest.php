<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\AWSResources|null $awsResources
 * @property list<string>|null $targetDomainIds
 * @property Shapes\CodeReviewSettings|null $codeReviewSettings
 */
class UpdateAgentSpaceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     awsResources?: Shapes\AWSResources|null,
     *     targetDomainIds?: list<string>|null,
     *     codeReviewSettings?: Shapes\CodeReviewSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
