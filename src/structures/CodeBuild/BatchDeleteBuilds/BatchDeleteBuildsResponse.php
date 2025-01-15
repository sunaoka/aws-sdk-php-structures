<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchDeleteBuilds;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $buildsDeleted
 * @property list<Shapes\BuildNotDeleted>|null $buildsNotDeleted
 */
class BatchDeleteBuildsResponse extends Response
{
}
