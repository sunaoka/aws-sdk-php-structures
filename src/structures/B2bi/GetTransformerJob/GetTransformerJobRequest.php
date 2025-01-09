<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformerJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerJobId
 * @property string $transformerId
 */
class GetTransformerJobRequest extends Request
{
    /**
     * @param array{
     *     transformerJobId: string,
     *     transformerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
