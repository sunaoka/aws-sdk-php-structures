<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProjectVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'PUBLIC_READ'|'PRIVATE' $projectVisibility
 * @property string|null $resourceAccessRole
 */
class UpdateProjectVisibilityRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectVisibility: 'PUBLIC_READ'|'PRIVATE',
     *     resourceAccessRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
