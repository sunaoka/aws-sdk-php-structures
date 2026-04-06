<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserSecretId
 * @property list<string>|null $TrustedHostKeys
 * @property int<1, max>|null $MaxConcurrentConnections
 */
class SftpConnectorConfig extends Shape
{
    /**
     * @param array{
     *     UserSecretId?: string|null,
     *     TrustedHostKeys?: list<string>|null,
     *     MaxConcurrentConnections?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
