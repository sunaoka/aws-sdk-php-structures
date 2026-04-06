<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextData $textData
 * @property RankingData $rankingData
 */
class ContentDataDetails extends Shape
{
    /**
     * @param array{
     *     textData: TextData,
     *     rankingData: RankingData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
