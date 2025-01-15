<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $RegistryArn
 * @property string|null $RegistryName
 */
class AwsEventSchemasRegistryDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     RegistryArn?: string|null,
     *     RegistryName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
