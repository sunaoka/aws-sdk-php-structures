<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DeleteStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteStageRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
