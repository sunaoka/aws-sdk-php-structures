<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetCaptureData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $data
 * @property Shapes\TimeInNanos $startTime
 * @property Shapes\TimeInNanos $endTime
 * @property 'VIDEO-MP4' $dataType
 * @property string|null $nextToken
 */
class GetCaptureDataResponse extends Response
{
}
