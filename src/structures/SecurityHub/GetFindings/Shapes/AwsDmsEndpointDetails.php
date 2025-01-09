<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $DatabaseName
 * @property string $EndpointArn
 * @property string $EndpointIdentifier
 * @property string $EndpointType
 * @property string $EngineName
 * @property string $ExternalId
 * @property string $ExtraConnectionAttributes
 * @property string $KmsKeyId
 * @property int $Port
 * @property string $ServerName
 * @property string $SslMode
 * @property string $Username
 */
class AwsDmsEndpointDetails extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     DatabaseName?: string,
     *     EndpointArn?: string,
     *     EndpointIdentifier?: string,
     *     EndpointType?: string,
     *     EngineName?: string,
     *     ExternalId?: string,
     *     ExtraConnectionAttributes?: string,
     *     KmsKeyId?: string,
     *     Port?: int,
     *     ServerName?: string,
     *     SslMode?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
