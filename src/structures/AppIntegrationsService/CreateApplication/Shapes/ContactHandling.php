<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CROSS_CONTACTS'|'PER_CONTACT'|null $Scope
 */
class ContactHandling extends Shape
{
    /**
     * @param array{Scope?: 'CROSS_CONTACTS'|'PER_CONTACT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
