<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialPair $CredentialPair
 * @property string $CopySourceArn
 * @property string $SecretArn
 */
class DataSourceCredentials extends Shape
{
    /**
     * @param array{
     *     CredentialPair?: CredentialPair,
     *     CopySourceArn?: string,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
