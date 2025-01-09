<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY_VALUE_SET'|'PAGE'|'LINE'|'WORD'|'TABLE'|'CELL'|'SELECTION_ELEMENT'|'MERGED_CELL'|'TITLE'|'QUERY'|'QUERY_RESULT'|'SIGNATURE'|'TABLE_TITLE'|'TABLE_FOOTER'|'LAYOUT_TEXT'|'LAYOUT_TITLE'|'LAYOUT_HEADER'|'LAYOUT_FOOTER'|'LAYOUT_SECTION_HEADER'|'LAYOUT_PAGE_NUMBER'|'LAYOUT_LIST'|'LAYOUT_FIGURE'|'LAYOUT_TABLE'|'LAYOUT_KEY_VALUE' $BlockType
 * @property float $Confidence
 * @property string $Text
 * @property 'HANDWRITING'|'PRINTED' $TextType
 * @property int $RowIndex
 * @property int $ColumnIndex
 * @property int $RowSpan
 * @property int $ColumnSpan
 * @property Geometry $Geometry
 * @property string $Id
 * @property list<Relationship> $Relationships
 * @property list<'KEY'|'VALUE'|'COLUMN_HEADER'|'TABLE_TITLE'|'TABLE_FOOTER'|'TABLE_SECTION_TITLE'|'TABLE_SUMMARY'|'STRUCTURED_TABLE'|'SEMI_STRUCTURED_TABLE'> $EntityTypes
 * @property 'SELECTED'|'NOT_SELECTED' $SelectionStatus
 * @property int $Page
 * @property Query $Query
 */
class Block extends Shape
{
    /**
     * @param array{
     *     BlockType?: 'KEY_VALUE_SET'|'PAGE'|'LINE'|'WORD'|'TABLE'|'CELL'|'SELECTION_ELEMENT'|'MERGED_CELL'|'TITLE'|'QUERY'|'QUERY_RESULT'|'SIGNATURE'|'TABLE_TITLE'|'TABLE_FOOTER'|'LAYOUT_TEXT'|'LAYOUT_TITLE'|'LAYOUT_HEADER'|'LAYOUT_FOOTER'|'LAYOUT_SECTION_HEADER'|'LAYOUT_PAGE_NUMBER'|'LAYOUT_LIST'|'LAYOUT_FIGURE'|'LAYOUT_TABLE'|'LAYOUT_KEY_VALUE',
     *     Confidence?: float,
     *     Text?: string,
     *     TextType?: 'HANDWRITING'|'PRINTED',
     *     RowIndex?: int,
     *     ColumnIndex?: int,
     *     RowSpan?: int,
     *     ColumnSpan?: int,
     *     Geometry?: Geometry,
     *     Id?: string,
     *     Relationships?: list<Relationship>,
     *     EntityTypes?: list<'KEY'|'VALUE'|'COLUMN_HEADER'|'TABLE_TITLE'|'TABLE_FOOTER'|'TABLE_SECTION_TITLE'|'TABLE_SUMMARY'|'STRUCTURED_TABLE'|'SEMI_STRUCTURED_TABLE'>,
     *     SelectionStatus?: 'SELECTED'|'NOT_SELECTED',
     *     Page?: int,
     *     Query?: Query
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
