<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ProbeInputFile>|null $InputFiles
 */
class ProbeRequest extends Request
{
    /**
     * @param array{InputFiles?: list<Shapes\ProbeInputFile>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
