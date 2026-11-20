<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListClientMetadataURLs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URL
 * @property \Aws\Api\DateTimeResult|null $CachedDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 */
class ClientMetadataURLType extends Shape
{
    /**
     * @param array{
     *     URL: string,
     *     CachedDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
