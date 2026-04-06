<?php

namespace Sunaoka\Aws\Structures\Transfer\StartFileTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property list<string>|null $SendFilePaths
 * @property list<string>|null $RetrieveFilePaths
 * @property string|null $LocalDirectoryPath
 * @property string|null $RemoteDirectoryPath
 */
class StartFileTransferRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     SendFilePaths?: list<string>|null,
     *     RetrieveFilePaths?: list<string>|null,
     *     LocalDirectoryPath?: string|null,
     *     RemoteDirectoryPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
