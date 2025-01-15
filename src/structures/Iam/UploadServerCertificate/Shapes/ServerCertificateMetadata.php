<?php

namespace Sunaoka\Aws\Structures\Iam\UploadServerCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $ServerCertificateName
 * @property string $ServerCertificateId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult|null $UploadDate
 * @property \Aws\Api\DateTimeResult|null $Expiration
 */
class ServerCertificateMetadata extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     ServerCertificateName: string,
     *     ServerCertificateId: string,
     *     Arn: string,
     *     UploadDate?: \Aws\Api\DateTimeResult|null,
     *     Expiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
