<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property 'no-referrer'|'no-referrer-when-downgrade'|'origin'|'origin-when-cross-origin'|'same-origin'|'strict-origin'|'strict-origin-when-cross-origin'|'unsafe-url' $ReferrerPolicy
 */
class ResponseHeadersPolicyReferrerPolicy extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     ReferrerPolicy: 'no-referrer'|'no-referrer-when-downgrade'|'origin'|'origin-when-cross-origin'|'same-origin'|'strict-origin'|'strict-origin-when-cross-origin'|'unsafe-url'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
