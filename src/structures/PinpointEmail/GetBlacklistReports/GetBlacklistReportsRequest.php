<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetBlacklistReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $BlacklistItemNames
 */
class GetBlacklistReportsRequest extends Request
{
    /**
     * @param array{BlacklistItemNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
