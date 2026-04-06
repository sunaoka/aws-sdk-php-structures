<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteComputationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelId
 * @property string|null $clientToken
 */
class DeleteComputationModelRequest extends Request
{
    /**
     * @param array{
     *     computationModelId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
