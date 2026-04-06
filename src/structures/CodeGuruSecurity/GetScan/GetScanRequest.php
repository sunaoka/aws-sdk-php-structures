<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanName
 * @property string|null $runId
 */
class GetScanRequest extends Request
{
    /**
     * @param array{
     *     scanName: string,
     *     runId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
