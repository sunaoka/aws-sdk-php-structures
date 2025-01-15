<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Override
 * @property bool $Protection
 * @property bool|null $ModeBlock
 * @property string|null $ReportUri
 */
class ResponseHeadersPolicyXSSProtection extends Shape
{
    /**
     * @param array{
     *     Override: bool,
     *     Protection: bool,
     *     ModeBlock?: bool|null,
     *     ReportUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
