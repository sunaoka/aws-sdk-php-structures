<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerAppPresignedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<5, 300> $ExpiresInSeconds
 * @property int<1800, 43200> $SessionExpirationDurationInSeconds
 */
class CreatePartnerAppPresignedUrlRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ExpiresInSeconds?: int<5, 300>,
     *     SessionExpirationDurationInSeconds?: int<1800, 43200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
