<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationAzureBlob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Token
 */
class AzureBlobSasConfiguration extends Shape
{
    /**
     * @param array{Token: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
