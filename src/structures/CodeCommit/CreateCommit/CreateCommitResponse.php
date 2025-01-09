<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $commitId
 * @property string $treeId
 * @property list<Shapes\FileMetadata> $filesAdded
 * @property list<Shapes\FileMetadata> $filesUpdated
 * @property list<Shapes\FileMetadata> $filesDeleted
 */
class CreateCommitResponse extends Response
{
}
