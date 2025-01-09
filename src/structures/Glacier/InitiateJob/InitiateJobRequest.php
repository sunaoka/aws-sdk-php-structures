<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property Shapes\JobParameters $jobParameters
 */
class InitiateJobRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     jobParameters?: Shapes\JobParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
