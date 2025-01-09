<?php

namespace Sunaoka\Aws\Structures\FSx\AssociateFileSystemAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $FileSystemId
 * @property list<string> $Aliases
 */
class AssociateFileSystemAliasesRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     FileSystemId: string,
     *     Aliases: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
