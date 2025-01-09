<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Policy
 * @property string $ResourceArn
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: string,
     *     ResourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
