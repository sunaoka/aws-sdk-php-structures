<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerAppPresignedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property int<5, 300>|null $ExpiresInSeconds
 * @property int<1800, 43200>|null $SessionExpirationDurationInSeconds
 */
class CreatePartnerAppPresignedUrlRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ExpiresInSeconds?: int<5, 300>|null,
     *     SessionExpirationDurationInSeconds?: int<1800, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
