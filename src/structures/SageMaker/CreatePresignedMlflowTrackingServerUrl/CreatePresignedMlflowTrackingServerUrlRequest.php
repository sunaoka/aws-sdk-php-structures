<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedMlflowTrackingServerUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackingServerName
 * @property int<5, 300>|null $ExpiresInSeconds
 * @property int<1800, 43200>|null $SessionExpirationDurationInSeconds
 */
class CreatePresignedMlflowTrackingServerUrlRequest extends Request
{
    /**
     * @param array{
     *     TrackingServerName: string,
     *     ExpiresInSeconds?: int<5, 300>|null,
     *     SessionExpirationDurationInSeconds?: int<1800, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
