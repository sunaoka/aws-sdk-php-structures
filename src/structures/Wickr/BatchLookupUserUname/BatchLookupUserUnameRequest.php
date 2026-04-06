<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchLookupUserUname;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property list<string> $unames
 * @property string|null $clientToken
 */
class BatchLookupUserUnameRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     unames: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
