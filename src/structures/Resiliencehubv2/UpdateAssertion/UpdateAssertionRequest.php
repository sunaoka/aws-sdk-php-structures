<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateAssertion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $assertionId
 * @property string|null $text
 */
class UpdateAssertionRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     assertionId: string,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
