<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $builtInPatternId
 * @property int $confidenceLevel
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
     *     confidenceLevel?: int,
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
