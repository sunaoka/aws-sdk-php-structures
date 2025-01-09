<?php

namespace Sunaoka\Aws\Structures\Redshift\RegisterNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerlessIdentifier $ServerlessIdentifier
 * @property ProvisionedIdentifier $ProvisionedIdentifier
 */
class NamespaceIdentifierUnion extends Shape
{
    /**
     * @param array{
     *     ServerlessIdentifier?: ServerlessIdentifier,
     *     ProvisionedIdentifier?: ProvisionedIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
