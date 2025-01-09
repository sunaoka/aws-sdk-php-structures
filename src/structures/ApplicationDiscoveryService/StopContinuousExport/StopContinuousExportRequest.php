<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StopContinuousExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportId
 */
class StopContinuousExportRequest extends Request
{
    /**
     * @param array{exportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
