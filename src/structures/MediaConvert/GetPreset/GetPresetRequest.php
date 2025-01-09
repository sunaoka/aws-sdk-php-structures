<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetPresetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
