<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RepositoryMetadata> $repositories
 * @property list<string> $repositoriesNotFound
 * @property list<Shapes\BatchGetRepositoriesError> $errors
 */
class BatchGetRepositoriesResponse extends Response
{
}
