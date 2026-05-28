<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetFailureModeFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property string $serviceArn
 */
class GetFailureModeFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     serviceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
