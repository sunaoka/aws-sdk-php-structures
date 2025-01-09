<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $RegistryArn
 * @property string $RegistryName
 */
class AwsEventSchemasRegistryDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     RegistryArn?: string,
     *     RegistryName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
