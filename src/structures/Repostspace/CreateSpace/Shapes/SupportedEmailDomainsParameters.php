<?php

namespace Sunaoka\Aws\Structures\Repostspace\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $enabled
 * @property list<string>|null $allowedDomains
 */
class SupportedEmailDomainsParameters extends Shape
{
    /**
     * @param array{
     *     enabled?: 'ENABLED'|'DISABLED'|null,
     *     allowedDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
