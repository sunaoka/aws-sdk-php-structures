<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CookieName
 * @property string|null $PolicyName
 */
class AwsElbAppCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     CookieName?: string|null,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
