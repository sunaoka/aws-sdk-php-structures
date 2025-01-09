<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetSbomExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class GetSbomExportRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
