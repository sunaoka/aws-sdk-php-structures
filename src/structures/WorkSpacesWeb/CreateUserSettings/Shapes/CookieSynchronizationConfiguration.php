<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CookieSpecification> $allowlist
 * @property list<CookieSpecification> $blocklist
 */
class CookieSynchronizationConfiguration extends Shape
{
    /**
     * @param array{
     *     allowlist: list<CookieSpecification>,
     *     blocklist?: list<CookieSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
