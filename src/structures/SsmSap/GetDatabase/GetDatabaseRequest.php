<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 * @property string $DatabaseId
 * @property string $DatabaseArn
 */
class GetDatabaseRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ComponentId?: string,
     *     DatabaseId?: string,
     *     DatabaseArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
