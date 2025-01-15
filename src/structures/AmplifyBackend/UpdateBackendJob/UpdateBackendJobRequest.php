<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $JobId
 * @property string|null $Operation
 * @property string|null $Status
 */
class UpdateBackendJobRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     JobId: string,
     *     Operation?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
