<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerAppPresignedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int $ExpiresInSeconds
 * @property int $SessionExpirationDurationInSeconds
 */
class CreatePartnerAppPresignedUrlRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ExpiresInSeconds?: int,
     *     SessionExpirationDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
