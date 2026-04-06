<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GenerateFindingRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $id
 */
class GenerateFindingRecommendationRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
