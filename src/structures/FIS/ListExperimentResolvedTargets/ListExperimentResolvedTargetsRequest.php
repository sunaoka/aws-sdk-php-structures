<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentResolvedTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $experimentId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $targetName
 */
class ListExperimentResolvedTargetsRequest extends Request
{
    /**
     * @param array{
     *     experimentId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     targetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
