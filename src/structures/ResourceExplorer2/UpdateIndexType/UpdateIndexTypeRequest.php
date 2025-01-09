<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateIndexType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class UpdateIndexTypeRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Type: 'LOCAL'|'AGGREGATOR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
