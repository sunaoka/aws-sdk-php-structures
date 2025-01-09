<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $jobID
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     jobID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
