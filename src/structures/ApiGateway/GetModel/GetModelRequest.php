<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $modelName
 * @property bool|null $flatten
 */
class GetModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     modelName: string,
     *     flatten?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
