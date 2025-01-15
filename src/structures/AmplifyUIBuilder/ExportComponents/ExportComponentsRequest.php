<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $nextToken
 */
class ExportComponentsRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
