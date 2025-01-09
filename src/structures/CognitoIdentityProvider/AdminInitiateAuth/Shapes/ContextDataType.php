<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $ServerName
 * @property string $ServerPath
 * @property list<HttpHeader> $HttpHeaders
 * @property string $EncodedData
 */
class ContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress: string,
     *     ServerName: string,
     *     ServerPath: string,
     *     HttpHeaders: list<HttpHeader>,
     *     EncodedData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
