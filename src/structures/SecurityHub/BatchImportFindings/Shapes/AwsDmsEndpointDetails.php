<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $DatabaseName
 * @property string|null $EndpointArn
 * @property string|null $EndpointIdentifier
 * @property string|null $EndpointType
 * @property string|null $EngineName
 * @property string|null $ExternalId
 * @property string|null $ExtraConnectionAttributes
 * @property string|null $KmsKeyId
 * @property int|null $Port
 * @property string|null $ServerName
 * @property string|null $SslMode
 * @property string|null $Username
 */
class AwsDmsEndpointDetails extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DatabaseName?: string|null,
     *     EndpointArn?: string|null,
     *     EndpointIdentifier?: string|null,
     *     EndpointType?: string|null,
     *     EngineName?: string|null,
     *     ExternalId?: string|null,
     *     ExtraConnectionAttributes?: string|null,
     *     KmsKeyId?: string|null,
     *     Port?: int|null,
     *     ServerName?: string|null,
     *     SslMode?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
