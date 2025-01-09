<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CookieName
 * @property string $PolicyName
 */
class AwsElbAppCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     CookieName?: string,
     *     PolicyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
