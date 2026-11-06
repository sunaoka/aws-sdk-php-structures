<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationAzureBlob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsIamRole
 * @property AzureOidcConfig|null $AzureOidc
 */
class AzureFederatedIdentityConfig extends Shape
{
    /**
     * @param array{
     *     AwsIamRole?: string|null,
     *     AzureOidc?: AzureOidcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
