<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetStageRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
