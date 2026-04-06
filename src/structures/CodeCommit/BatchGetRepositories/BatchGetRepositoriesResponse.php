<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RepositoryMetadata>|null $repositories
 * @property list<string>|null $repositoriesNotFound
 */
class BatchGetRepositoriesResponse extends Response
{
}
