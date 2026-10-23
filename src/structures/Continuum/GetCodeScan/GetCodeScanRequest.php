<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $scanRunId
 */
class GetCodeScanRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     scanRunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
