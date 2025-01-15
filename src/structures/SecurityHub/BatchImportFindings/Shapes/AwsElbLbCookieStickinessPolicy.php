<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CookieExpirationPeriod
 * @property string|null $PolicyName
 */
class AwsElbLbCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     CookieExpirationPeriod?: int|null,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
