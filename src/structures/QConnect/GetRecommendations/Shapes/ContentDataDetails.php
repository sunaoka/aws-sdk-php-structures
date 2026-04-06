<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RankingData $rankingData
 * @property TextData $textData
 */
class ContentDataDetails extends Shape
{
    /**
     * @param array{
     *     rankingData: RankingData,
     *     textData: TextData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
