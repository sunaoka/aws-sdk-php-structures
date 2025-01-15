<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $commitSpecifier
 * @property string $folderPath
 */
class GetFolderRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitSpecifier?: string|null,
     *     folderPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
