<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetJobRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
