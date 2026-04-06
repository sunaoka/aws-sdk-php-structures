<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetCompositionRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
