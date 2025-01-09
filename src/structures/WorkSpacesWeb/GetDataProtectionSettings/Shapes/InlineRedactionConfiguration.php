<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $globalConfidenceLevel
 * @property list<string> $globalEnforcedUrls
 * @property list<string> $globalExemptUrls
 * @property list<InlineRedactionPattern> $inlineRedactionPatterns
 */
class InlineRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     globalConfidenceLevel?: int,
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
