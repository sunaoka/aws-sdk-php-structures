<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $commitSpecifier
 * @property string $filePath
 */
class GetFileRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     commitSpecifier?: string,
     *     filePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
