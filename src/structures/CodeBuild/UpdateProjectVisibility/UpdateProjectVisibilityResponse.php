<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProjectVisibility;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $projectArn
 * @property string|null $publicProjectAlias
 * @property 'PUBLIC_READ'|'PRIVATE'|null $projectVisibility
 */
class UpdateProjectVisibilityResponse extends Response
{
}
