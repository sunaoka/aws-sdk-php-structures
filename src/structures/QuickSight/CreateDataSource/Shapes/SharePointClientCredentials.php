<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 * @property string $CertThumbprint
 */
class SharePointClientCredentials extends Shape
{
    /**
     * @param array{
     *     KmsKeyArn: string,
     *     CertThumbprint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
