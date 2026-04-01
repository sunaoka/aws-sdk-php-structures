<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLookupTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lookupTableArn
 */
class DeleteLookupTableRequest extends Request
{
    /**
     * @param array{lookupTableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
