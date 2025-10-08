<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'NOT_ALLOWED'|null $enabled
 * @property list<string>|null $allowedDomains
 */
class SupportedEmailDomainsStatus extends Shape
{
    /**
     * @param array{
     *     enabled?: 'ENABLED'|'DISABLED'|'NOT_ALLOWED'|null,
     *     allowedDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
