<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $commitId
 * @property string|null $treeId
 * @property list<Shapes\FileMetadata>|null $filesAdded
 * @property list<Shapes\FileMetadata>|null $filesUpdated
 * @property list<Shapes\FileMetadata>|null $filesDeleted
 */
class CreateCommitResponse extends Response
{
}
