<?php

namespace Sunaoka\Aws\Structures\Glacier\GetJobOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $jobId
 * @property string $range
 */
class GetJobOutputRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     jobId: string,
     *     range?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
