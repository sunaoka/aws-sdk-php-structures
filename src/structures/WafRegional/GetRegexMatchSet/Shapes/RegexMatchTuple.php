<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRegexMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldToMatch $FieldToMatch
 * @property 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE' $TextTransformation
 * @property string $RegexPatternSetId
 */
class RegexMatchTuple extends Shape
{
    /**
     * @param array{
     *     FieldToMatch: FieldToMatch,
     *     TextTransformation: 'NONE'|'COMPRESS_WHITE_SPACE'|'HTML_ENTITY_DECODE'|'LOWERCASE'|'CMD_LINE'|'URL_DECODE',
     *     RegexPatternSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
