<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplateRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $nextToken
 * @property int $maxResults
 */
class GetSystemTemplateRevisionsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
