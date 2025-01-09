<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $builtInPatternId
 * @property int<1, 3> $confidenceLevel
 * @property CustomPattern $customPattern
 * @property list<string> $enforcedUrls
 * @property list<string> $exemptUrls
 * @property RedactionPlaceHolder $redactionPlaceHolder
 */
class InlineRedactionPattern extends Shape
{
    /**
     * @param array{
     *     builtInPatternId?: string,
     *     confidenceLevel?: int<1, 3>,
     *     customPattern?: CustomPattern,
     *     enforcedUrls?: list<string>,
     *     exemptUrls?: list<string>,
     *     redactionPlaceHolder: RedactionPlaceHolder
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
