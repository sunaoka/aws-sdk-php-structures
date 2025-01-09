<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $commitId
 * @property string $folderPath
 * @property string $treeId
 * @property list<Shapes\Folder> $subFolders
 * @property list<Shapes\File> $files
 * @property list<Shapes\SymbolicLink> $symbolicLinks
 * @property list<Shapes\SubModule> $subModules
 */
class GetFolderResponse extends Response
{
}
