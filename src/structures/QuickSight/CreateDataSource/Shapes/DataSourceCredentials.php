<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialPair|null $CredentialPair
 * @property string|null $CopySourceArn
 * @property string|null $SecretArn
 */
class DataSourceCredentials extends Shape
{
    /**
     * @param array{
     *     CredentialPair?: CredentialPair|null,
     *     CopySourceArn?: string|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
