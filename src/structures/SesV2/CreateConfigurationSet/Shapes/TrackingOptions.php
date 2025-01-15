<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomRedirectDomain
 * @property 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL'|null $HttpsPolicy
 */
class TrackingOptions extends Shape
{
    /**
     * @param array{
     *     CustomRedirectDomain: string,
     *     HttpsPolicy?: 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
