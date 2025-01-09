<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserSecretId
 * @property list<string> $TrustedHostKeys
 */
class SftpConnectorConfig extends Shape
{
    /**
     * @param array{
     *     UserSecretId?: string,
     *     TrustedHostKeys?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
