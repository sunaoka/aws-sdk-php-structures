<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteRunRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
