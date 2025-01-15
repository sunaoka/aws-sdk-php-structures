<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $commitId
 * @property string $folderPath
 * @property string|null $treeId
 * @property list<Shapes\Folder>|null $subFolders
 * @property list<Shapes\File>|null $files
 * @property list<Shapes\SymbolicLink>|null $symbolicLinks
 * @property list<Shapes\SubModule>|null $subModules
 */
class GetFolderResponse extends Response
{
}
