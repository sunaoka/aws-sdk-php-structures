<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 */
class DescribeWorkteamRequest extends Request
{
    /**
     * @param array{WorkteamName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
