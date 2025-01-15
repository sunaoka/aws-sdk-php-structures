<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RepositoryMetadata>|null $repositories
 * @property list<string>|null $repositoriesNotFound
 * @property list<Shapes\BatchGetRepositoriesError>|null $errors
 */
class BatchGetRepositoriesResponse extends Response
{
}
