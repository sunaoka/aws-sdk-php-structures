<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $SemanticVersion
 */
class CreateCloudFormationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
