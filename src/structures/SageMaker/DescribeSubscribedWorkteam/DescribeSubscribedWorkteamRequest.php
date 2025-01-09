<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSubscribedWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamArn
 */
class DescribeSubscribedWorkteamRequest extends Request
{
    /**
     * @param array{WorkteamArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
