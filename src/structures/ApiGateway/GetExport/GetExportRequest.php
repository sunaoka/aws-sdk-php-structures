<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $exportType
 * @property array<string, string> $parameters
 * @property string $accepts
 */
class GetExportRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     exportType: string,
     *     parameters?: array<string, string>,
     *     accepts?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
