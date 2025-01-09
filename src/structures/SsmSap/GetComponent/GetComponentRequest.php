<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 */
class GetComponentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ComponentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
