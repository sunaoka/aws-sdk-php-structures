<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $id
 */
class DeleteCollectionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
