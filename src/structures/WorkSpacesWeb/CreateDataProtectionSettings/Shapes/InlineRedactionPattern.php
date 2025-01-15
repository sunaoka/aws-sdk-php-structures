<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $builtInPatternId
 * @property int<1, 3>|null $confidenceLevel
 * @property CustomPattern|null $customPattern
 * @property list<string>|null $enforcedUrls
 * @property list<string>|null $exemptUrls
 * @property RedactionPlaceHolder $redactionPlaceHolder
 */
class InlineRedactionPattern extends Shape
{
    /**
     * @param array{
     *     builtInPatternId?: string|null,
     *     confidenceLevel?: int<1, 3>|null,
     *     customPattern?: CustomPattern|null,
     *     enforcedUrls?: list<string>|null,
     *     exemptUrls?: list<string>|null,
     *     redactionPlaceHolder: RedactionPlaceHolder
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
