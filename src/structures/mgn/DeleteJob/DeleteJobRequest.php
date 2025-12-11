<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobID
 * @property string|null $accountID
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{
     *     jobID: string,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
