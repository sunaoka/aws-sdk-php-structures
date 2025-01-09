<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3> $globalConfidenceLevel
 * @property list<string> $globalEnforcedUrls
 * @property list<string> $globalExemptUrls
 * @property list<InlineRedactionPattern> $inlineRedactionPatterns
 */
class InlineRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     globalConfidenceLevel?: int<1, 3>,
     *     globalEnforcedUrls?: list<string>,
     *     globalExemptUrls?: list<string>,
     *     inlineRedactionPatterns: list<InlineRedactionPattern>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
