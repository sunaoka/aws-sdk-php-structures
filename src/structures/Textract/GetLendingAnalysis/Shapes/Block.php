<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY_VALUE_SET'|'PAGE'|'LINE'|'WORD'|'TABLE'|'CELL'|'SELECTION_ELEMENT'|'MERGED_CELL'|'TITLE'|'QUERY'|'QUERY_RESULT'|'SIGNATURE'|'TABLE_TITLE'|'TABLE_FOOTER'|'LAYOUT_TEXT'|'LAYOUT_TITLE'|'LAYOUT_HEADER'|'LAYOUT_FOOTER'|'LAYOUT_SECTION_HEADER'|'LAYOUT_PAGE_NUMBER'|'LAYOUT_LIST'|'LAYOUT_FIGURE'|'LAYOUT_TABLE'|'LAYOUT_KEY_VALUE'|null $BlockType
 * @property float|null $Confidence
 * @property string|null $Text
 * @property 'HANDWRITING'|'PRINTED'|null $TextType
 * @property int<0, max>|null $RowIndex
 * @property int<0, max>|null $ColumnIndex
 * @property int<0, max>|null $RowSpan
 * @property int<0, max>|null $ColumnSpan
 * @property Geometry|null $Geometry
 * @property string|null $Id
 * @property list<Relationship>|null $Relationships
 * @property list<'KEY'|'VALUE'|'COLUMN_HEADER'|'TABLE_TITLE'|'TABLE_FOOTER'|'TABLE_SECTION_TITLE'|'TABLE_SUMMARY'|'STRUCTURED_TABLE'|'SEMI_STRUCTURED_TABLE'>|null $EntityTypes
 * @property 'SELECTED'|'NOT_SELECTED'|null $SelectionStatus
 * @property int<0, max>|null $Page
 * @property Query|null $Query
 */
class Block extends Shape
{
    /**
     * @param array{
     *     BlockType?: 'KEY_VALUE_SET'|'PAGE'|'LINE'|'WORD'|'TABLE'|'CELL'|'SELECTION_ELEMENT'|'MERGED_CELL'|'TITLE'|'QUERY'|'QUERY_RESULT'|'SIGNATURE'|'TABLE_TITLE'|'TABLE_FOOTER'|'LAYOUT_TEXT'|'LAYOUT_TITLE'|'LAYOUT_HEADER'|'LAYOUT_FOOTER'|'LAYOUT_SECTION_HEADER'|'LAYOUT_PAGE_NUMBER'|'LAYOUT_LIST'|'LAYOUT_FIGURE'|'LAYOUT_TABLE'|'LAYOUT_KEY_VALUE'|null,
     *     Confidence?: float|null,
     *     Text?: string|null,
     *     TextType?: 'HANDWRITING'|'PRINTED'|null,
     *     RowIndex?: int<0, max>|null,
     *     ColumnIndex?: int<0, max>|null,
     *     RowSpan?: int<0, max>|null,
     *     ColumnSpan?: int<0, max>|null,
     *     Geometry?: Geometry|null,
     *     Id?: string|null,
     *     Relationships?: list<Relationship>|null,
     *     EntityTypes?: list<'KEY'|'VALUE'|'COLUMN_HEADER'|'TABLE_TITLE'|'TABLE_FOOTER'|'TABLE_SECTION_TITLE'|'TABLE_SUMMARY'|'STRUCTURED_TABLE'|'SEMI_STRUCTURED_TABLE'>|null,
     *     SelectionStatus?: 'SELECTED'|'NOT_SELECTED'|null,
     *     Page?: int<0, max>|null,
     *     Query?: Query|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
