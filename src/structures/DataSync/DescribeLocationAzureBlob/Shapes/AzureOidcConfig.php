<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationAzureBlob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string $ClientId
 */
class AzureOidcConfig extends Shape
{
    /**
     * @param array{
     *     TenantId: string,
     *     ClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
