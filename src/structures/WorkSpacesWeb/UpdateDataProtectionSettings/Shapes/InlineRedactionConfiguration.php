<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineRedactionPattern> $inlineRedactionPatterns
 * @property list<string>|null $globalEnforcedUrls
 * @property list<string>|null $globalExemptUrls
 * @property int<1, 3>|null $globalConfidenceLevel
 */
class InlineRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     inlineRedactionPatterns: list<InlineRedactionPattern>,
     *     globalEnforcedUrls?: list<string>|null,
     *     globalExemptUrls?: list<string>|null,
     *     globalConfidenceLevel?: int<1, 3>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
