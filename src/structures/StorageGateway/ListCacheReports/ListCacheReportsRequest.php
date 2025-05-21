<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListCacheReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 */
class ListCacheReportsRequest extends Request
{
    /**
     * @param array{Marker?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
