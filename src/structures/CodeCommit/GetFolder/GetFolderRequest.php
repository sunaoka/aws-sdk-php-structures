<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $commitSpecifier
 * @property string $folderPath
 */
class GetFolderRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitSpecifier?: string,
     *     folderPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
