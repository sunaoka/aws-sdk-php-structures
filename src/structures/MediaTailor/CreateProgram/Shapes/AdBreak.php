<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SPLICE_INSERT'|'TIME_SIGNAL'|null $MessageType
 * @property int $OffsetMillis
 * @property SlateSource|null $Slate
 * @property SpliceInsertMessage|null $SpliceInsertMessage
 * @property TimeSignalMessage|null $TimeSignalMessage
 * @property list<KeyValuePair>|null $AdBreakMetadata
 */
class AdBreak extends Shape
{
    /**
     * @param array{
     *     MessageType?: 'SPLICE_INSERT'|'TIME_SIGNAL'|null,
     *     OffsetMillis: int,
     *     Slate?: SlateSource|null,
     *     SpliceInsertMessage?: SpliceInsertMessage|null,
     *     TimeSignalMessage?: TimeSignalMessage|null,
     *     AdBreakMetadata?: list<KeyValuePair>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
