<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $stageName
 * @property string $exportType
 * @property array<string, string>|null $parameters
 * @property string|null $accepts
 */
class GetExportRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     stageName: string,
     *     exportType: string,
     *     parameters?: array<string, string>|null,
     *     accepts?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
