<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioSegment|null $audio
 * @property string|null $byteContent
 * @property list<RetrievalResultContentColumn>|null $row
 * @property string|null $text
 * @property 'TEXT'|'IMAGE'|'ROW'|'AUDIO'|'VIDEO'|null $type
 * @property VideoSegment|null $video
 */
class RetrievalResultContent extends Shape
{
    /**
     * @param array{
     *     audio?: AudioSegment|null,
     *     byteContent?: string|null,
     *     row?: list<RetrievalResultContentColumn>|null,
     *     text?: string|null,
     *     type?: 'TEXT'|'IMAGE'|'ROW'|'AUDIO'|'VIDEO'|null,
     *     video?: VideoSegment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
