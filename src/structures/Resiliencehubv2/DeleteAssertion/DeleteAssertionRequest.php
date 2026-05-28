<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteAssertion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $assertionId
 */
class DeleteAssertionRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     assertionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
