<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplicationPresignedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property 'FLINK_DASHBOARD_URL'|'ZEPPELIN_UI_URL' $UrlType
 * @property int $SessionExpirationDurationInSeconds
 */
class CreateApplicationPresignedUrlRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     UrlType: 'FLINK_DASHBOARD_URL'|'ZEPPELIN_UI_URL',
     *     SessionExpirationDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
