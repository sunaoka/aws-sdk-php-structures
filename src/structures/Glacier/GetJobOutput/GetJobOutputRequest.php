<?php

namespace Sunaoka\Aws\Structures\Glacier\GetJobOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $jobId
 * @property string|null $range
 */
class GetJobOutputRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     jobId: string,
     *     range?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
