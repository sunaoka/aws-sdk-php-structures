<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValuePair>|null $AdBreakMetadata
 * @property 'SPLICE_INSERT'|'TIME_SIGNAL'|null $MessageType
 * @property int $OffsetMillis
 * @property SlateSource|null $Slate
 * @property SpliceInsertMessage|null $SpliceInsertMessage
 * @property TimeSignalMessage|null $TimeSignalMessage
 */
class AdBreak extends Shape
{
    /**
     * @param array{
     *     AdBreakMetadata?: list<KeyValuePair>|null,
     *     MessageType?: 'SPLICE_INSERT'|'TIME_SIGNAL'|null,
     *     OffsetMillis: int,
     *     Slate?: SlateSource|null,
     *     SpliceInsertMessage?: SpliceInsertMessage|null,
     *     TimeSignalMessage?: TimeSignalMessage|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
