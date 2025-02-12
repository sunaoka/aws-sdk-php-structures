<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'data' $type
 * @property string $name
 */
class GetAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'data',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
