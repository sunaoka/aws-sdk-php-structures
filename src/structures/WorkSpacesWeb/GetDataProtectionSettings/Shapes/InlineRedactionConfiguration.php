<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3>|null $globalConfidenceLevel
 * @property list<string>|null $globalEnforcedUrls
 * @property list<string>|null $globalExemptUrls
 * @property list<InlineRedactionPattern> $inlineRedactionPatterns
 */
class InlineRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     globalConfidenceLevel?: int<1, 3>|null,
     *     globalEnforcedUrls?: list<string>|null,
     *     globalExemptUrls?: list<string>|null,
     *     inlineRedactionPatterns: list<InlineRedactionPattern>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
