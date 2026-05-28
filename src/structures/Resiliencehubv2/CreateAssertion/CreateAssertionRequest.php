<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateAssertion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $text
 * @property string|null $clientToken
 */
class CreateAssertionRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     text: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
