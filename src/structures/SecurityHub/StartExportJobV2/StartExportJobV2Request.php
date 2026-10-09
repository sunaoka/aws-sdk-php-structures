<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartExportJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property Shapes\ExportDestination $Destination
 * @property Shapes\ExportOutput $OutputConfiguration
 * @property Shapes\ExportScopes|null $Scopes
 * @property string|null $ClientToken
 */
class StartExportJobV2Request extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Destination: Shapes\ExportDestination,
     *     OutputConfiguration: Shapes\ExportOutput,
     *     Scopes?: Shapes\ExportScopes|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
