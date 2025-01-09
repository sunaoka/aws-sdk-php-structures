<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StopSearchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 */
class StopSearchJobRequest extends Request
{
    /**
     * @param array{SearchJobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
