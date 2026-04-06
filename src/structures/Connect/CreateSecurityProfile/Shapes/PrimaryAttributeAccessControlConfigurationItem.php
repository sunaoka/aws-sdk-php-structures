<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PrimaryAttributeValue>|null $PrimaryAttributeValues
 */
class PrimaryAttributeAccessControlConfigurationItem extends Shape
{
    /**
     * @param array{PrimaryAttributeValues?: list<PrimaryAttributeValue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
