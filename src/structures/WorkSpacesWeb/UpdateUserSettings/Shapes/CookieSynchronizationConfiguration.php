<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CookieSpecification> $allowlist
 * @property list<CookieSpecification>|null $blocklist
 */
class CookieSynchronizationConfiguration extends Shape
{
    /**
     * @param array{
     *     allowlist: list<CookieSpecification>,
     *     blocklist?: list<CookieSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
