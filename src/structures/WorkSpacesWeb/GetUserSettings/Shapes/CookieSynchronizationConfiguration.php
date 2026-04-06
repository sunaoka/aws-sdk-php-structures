<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

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
