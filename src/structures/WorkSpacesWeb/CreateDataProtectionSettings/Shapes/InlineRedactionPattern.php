<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateDataProtectionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $builtInPatternId
 * @property CustomPattern|null $customPattern
 * @property RedactionPlaceHolder $redactionPlaceHolder
 * @property list<string>|null $enforcedUrls
 * @property list<string>|null $exemptUrls
 * @property int<1, 3>|null $confidenceLevel
 */
class InlineRedactionPattern extends Shape
{
    /**
     * @param array{
     *     builtInPatternId?: string|null,
     *     customPattern?: CustomPattern|null,
     *     redactionPlaceHolder: RedactionPlaceHolder,
     *     enforcedUrls?: list<string>|null,
     *     exemptUrls?: list<string>|null,
     *     confidenceLevel?: int<1, 3>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
