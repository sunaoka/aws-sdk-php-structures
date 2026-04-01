<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\AWSResources|null $awsResources
 * @property list<string>|null $targetDomainIds
 * @property Shapes\CodeReviewSettings|null $codeReviewSettings
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateAgentSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     awsResources?: Shapes\AWSResources|null,
     *     targetDomainIds?: list<string>|null,
     *     codeReviewSettings?: Shapes\CodeReviewSettings|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
