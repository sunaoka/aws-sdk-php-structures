<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteBuildBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $statusCode
 * @property list<string> $buildsDeleted
 * @property list<Shapes\BuildNotDeleted> $buildsNotDeleted
 */
class DeleteBuildBatchResponse extends Response
{
}
