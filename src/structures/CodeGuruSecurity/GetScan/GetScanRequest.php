<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $runId
 * @property string $scanName
 */
class GetScanRequest extends Request
{
    /**
     * @param array{
     *     runId?: string,
     *     scanName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
