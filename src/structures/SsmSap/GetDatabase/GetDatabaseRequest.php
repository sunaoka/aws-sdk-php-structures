<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationId
 * @property string|null $ComponentId
 * @property string|null $DatabaseId
 * @property string|null $DatabaseArn
 */
class GetDatabaseRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ComponentId?: string|null,
     *     DatabaseId?: string|null,
     *     DatabaseArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
