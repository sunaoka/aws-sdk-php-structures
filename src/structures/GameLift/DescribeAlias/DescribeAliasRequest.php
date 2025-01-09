<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 */
class DescribeAliasRequest extends Request
{
    /**
     * @param array{AliasId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
