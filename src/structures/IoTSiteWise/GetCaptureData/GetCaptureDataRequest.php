<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetCaptureData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property Shapes\TimeInNanos $startTime
 * @property Shapes\TimeInNanos $endTime
 * @property string|null $timeSeriesId
 * @property string|null $propertyAlias
 * @property Shapes\FormatSettings|null $formatSettings
 * @property string|null $nextToken
 */
class GetCaptureDataRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     startTime: Shapes\TimeInNanos,
     *     endTime: Shapes\TimeInNanos,
     *     timeSeriesId?: string|null,
     *     propertyAlias?: string|null,
     *     formatSettings?: Shapes\FormatSettings|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
