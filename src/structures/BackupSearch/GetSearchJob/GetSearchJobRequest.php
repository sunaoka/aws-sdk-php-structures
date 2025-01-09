<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 */
class GetSearchJobRequest extends Request
{
    /**
     * @param array{SearchJobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
