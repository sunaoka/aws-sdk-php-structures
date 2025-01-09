<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteAllowList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $ignoreJobChecks
 */
class DeleteAllowListRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     ignoreJobChecks?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
