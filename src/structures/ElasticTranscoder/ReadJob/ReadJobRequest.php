<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class ReadJobRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
