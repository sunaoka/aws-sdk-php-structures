<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property list<Shapes\SetSourceRequest> $Sources
 */
class AddFlowSourcesRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     Sources: list<Shapes\SetSourceRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
