<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class ReadPresetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
