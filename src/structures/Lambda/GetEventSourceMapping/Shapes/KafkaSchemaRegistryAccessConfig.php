<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC_AUTH'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|null $Type
 * @property string|null $URI
 */
class KafkaSchemaRegistryAccessConfig extends Shape
{
    /**
     * @param array{
     *     Type?: 'BASIC_AUTH'|'CLIENT_CERTIFICATE_TLS_AUTH'|'SERVER_ROOT_CA_CERTIFICATE'|null,
     *     URI?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
