<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLookupTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lookupTableArn
 */
class GetLookupTableRequest extends Request
{
    /**
     * @param array{lookupTableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
