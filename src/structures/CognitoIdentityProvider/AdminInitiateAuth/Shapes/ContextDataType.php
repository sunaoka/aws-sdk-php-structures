<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $ServerName
 * @property string $ServerPath
 * @property list<HttpHeader> $HttpHeaders
 * @property string|null $EncodedData
 */
class ContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress: string,
     *     ServerName: string,
     *     ServerPath: string,
     *     HttpHeaders: list<HttpHeader>,
     *     EncodedData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
