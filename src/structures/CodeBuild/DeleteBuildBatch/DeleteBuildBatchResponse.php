<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteBuildBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $statusCode
 * @property list<string>|null $buildsDeleted
 * @property list<Shapes\BuildNotDeleted>|null $buildsNotDeleted
 */
class DeleteBuildBatchResponse extends Response
{
}
