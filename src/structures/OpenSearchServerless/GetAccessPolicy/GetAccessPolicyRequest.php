<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'data' $type
 */
class GetAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
