<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $Alias
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Alias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
