<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property bool $Protection
 * @property bool $ModeBlock
 * @property string $ReportUri
 */
class ResponseHeadersPolicyXSSProtection extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     Protection: bool,
     *     ModeBlock?: bool,
     *     ReportUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
