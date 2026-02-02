<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $clientToken
 */
class DeleteCollectionGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
