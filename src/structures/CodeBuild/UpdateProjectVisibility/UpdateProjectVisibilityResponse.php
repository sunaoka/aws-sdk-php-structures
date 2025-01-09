<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProjectVisibility;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $projectArn
 * @property string $publicProjectAlias
 * @property 'PUBLIC_READ'|'PRIVATE' $projectVisibility
 */
class UpdateProjectVisibilityResponse extends Response
{
}
