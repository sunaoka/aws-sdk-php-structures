<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetJobUnlockCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetJobUnlockCodeRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
