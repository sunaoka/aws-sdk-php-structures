<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
