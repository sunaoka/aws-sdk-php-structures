<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\GetExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportArn
 */
class GetExportRequest extends Request
{
    /**
     * @param array{exportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
