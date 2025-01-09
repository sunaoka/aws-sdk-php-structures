<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $targetName
 */
class ListExperimentResolvedTargetsRequest extends Request
{
    /**
     * @param array{
     *     experimentId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     targetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
