<?php

namespace Sunaoka\Aws\Structures\Redshift\RegisterNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerlessIdentifier|null $ServerlessIdentifier
 * @property ProvisionedIdentifier|null $ProvisionedIdentifier
 */
class NamespaceIdentifierUnion extends Shape
{
    /**
     * @param array{
     *     ServerlessIdentifier?: ServerlessIdentifier|null,
     *     ProvisionedIdentifier?: ProvisionedIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
