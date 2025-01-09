<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $ServerCertificateName
 * @property string $ServerCertificateId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $UploadDate
 * @property \Aws\Api\DateTimeResult $Expiration
 */
class ServerCertificateMetadata extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     ServerCertificateName: string,
     *     ServerCertificateId: string,
     *     Arn: string,
     *     UploadDate?: \Aws\Api\DateTimeResult,
     *     Expiration?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
