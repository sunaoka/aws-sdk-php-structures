<?php

namespace Sunaoka\Aws\Structures\FSx\DisassociateFileSystemAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $FileSystemId
 * @property list<string> $Aliases
 */
class DisassociateFileSystemAliasesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId: string,
     *     Aliases: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
