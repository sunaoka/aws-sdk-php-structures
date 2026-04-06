<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentDataDetails|null $contentData
 * @property GenerativeDataDetails|null $generativeData
 * @property IntentDetectedDataDetails|null $intentDetectedData
 * @property SourceContentDataDetails|null $sourceContentData
 * @property GenerativeChunkDataDetails|null $generativeChunkData
 * @property EmailResponseChunkDataDetails|null $emailResponseChunkData
 * @property EmailOverviewChunkDataDetails|null $emailOverviewChunkData
 * @property EmailGenerativeAnswerChunkDataDetails|null $emailGenerativeAnswerChunkData
 * @property CaseSummarizationChunkDataDetails|null $caseSummarizationChunkData
 * @property SuggestedMessageDataDetails|null $suggestedMessageData
 * @property NotesDataDetails|null $notesData
 * @property NotesChunkDataDetails|null $notesChunkData
 */
class DataDetails extends Shape
{
    /**
     * @param array{
     *     contentData?: ContentDataDetails|null,
     *     generativeData?: GenerativeDataDetails|null,
     *     intentDetectedData?: IntentDetectedDataDetails|null,
     *     sourceContentData?: SourceContentDataDetails|null,
     *     generativeChunkData?: GenerativeChunkDataDetails|null,
     *     emailResponseChunkData?: EmailResponseChunkDataDetails|null,
     *     emailOverviewChunkData?: EmailOverviewChunkDataDetails|null,
     *     emailGenerativeAnswerChunkData?: EmailGenerativeAnswerChunkDataDetails|null,
     *     caseSummarizationChunkData?: CaseSummarizationChunkDataDetails|null,
     *     suggestedMessageData?: SuggestedMessageDataDetails|null,
     *     notesData?: NotesDataDetails|null,
     *     notesChunkData?: NotesChunkDataDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
