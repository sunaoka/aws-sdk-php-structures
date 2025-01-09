<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedMlflowTrackingServerUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property int $ExpiresInSeconds
 * @property int $SessionExpirationDurationInSeconds
 */
class CreatePresignedMlflowTrackingServerUrlRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ExpiresInSeconds?: int,
     *     SessionExpirationDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
