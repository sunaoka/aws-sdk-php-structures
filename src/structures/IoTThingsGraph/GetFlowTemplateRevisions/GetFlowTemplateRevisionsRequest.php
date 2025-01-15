<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplateRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class GetFlowTemplateRevisionsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
