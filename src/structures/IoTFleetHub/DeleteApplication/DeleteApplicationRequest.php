<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $clientToken
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
