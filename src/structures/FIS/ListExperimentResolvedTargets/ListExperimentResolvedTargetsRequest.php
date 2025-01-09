<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $targetName
 */
class ListExperimentResolvedTargetsRequest extends Request
{
    /**
     * @param array{
     *     experimentId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     targetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
