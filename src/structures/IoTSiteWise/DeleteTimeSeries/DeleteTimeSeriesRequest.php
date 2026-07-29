<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $alias
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $clientToken
 * @property string|null $workspaceName
 */
class DeleteTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string|null,
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     clientToken?: string|null,
     *     workspaceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
