<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $modelName
 * @property bool $flatten
 */
class GetModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     modelName: string,
     *     flatten?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
