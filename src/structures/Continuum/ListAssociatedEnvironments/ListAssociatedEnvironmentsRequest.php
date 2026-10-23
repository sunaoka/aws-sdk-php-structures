<?php

namespace Sunaoka\Aws\Structures\Continuum\ListAssociatedEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectorId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAssociatedEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     collectorId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
