<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3CertificateConfiguration|null $s3
 * @property SecretsManagerCertificateConfiguration|null $secretsManager
 */
class CertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     s3?: S3CertificateConfiguration|null,
     *     secretsManager?: SecretsManagerCertificateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
