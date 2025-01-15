<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $id
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class GetFindingV2Request extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     id: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
