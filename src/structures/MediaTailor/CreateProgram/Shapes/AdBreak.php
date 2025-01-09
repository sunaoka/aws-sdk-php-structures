<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValuePair> $AdBreakMetadata
 * @property 'SPLICE_INSERT'|'TIME_SIGNAL' $MessageType
 * @property int $OffsetMillis
 * @property SlateSource $Slate
 * @property SpliceInsertMessage $SpliceInsertMessage
 * @property TimeSignalMessage $TimeSignalMessage
 */
class AdBreak extends Shape
{
    /**
     * @param array{
     *     AdBreakMetadata?: list<KeyValuePair>,
     *     MessageType?: 'SPLICE_INSERT'|'TIME_SIGNAL',
     *     OffsetMillis: int,
     *     Slate?: SlateSource,
     *     SpliceInsertMessage?: SpliceInsertMessage,
     *     TimeSignalMessage?: TimeSignalMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
