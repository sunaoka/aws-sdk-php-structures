<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CookieExpirationPeriod
 * @property string $PolicyName
 */
class AwsElbLbCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     CookieExpirationPeriod?: int,
     *     PolicyName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
