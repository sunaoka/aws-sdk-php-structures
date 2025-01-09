<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\DeletePreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeletePresetRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
