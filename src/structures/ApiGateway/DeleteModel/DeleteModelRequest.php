<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $modelName
 */
class DeleteModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     modelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
