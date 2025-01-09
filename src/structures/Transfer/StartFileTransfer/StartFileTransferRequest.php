<?php

namespace Sunaoka\Aws\Structures\Transfer\StartFileTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property list<string> $SendFilePaths
 * @property list<string> $RetrieveFilePaths
 * @property string $LocalDirectoryPath
 * @property string $RemoteDirectoryPath
 */
class StartFileTransferRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     SendFilePaths?: list<string>,
     *     RetrieveFilePaths?: list<string>,
     *     LocalDirectoryPath?: string,
     *     RemoteDirectoryPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
