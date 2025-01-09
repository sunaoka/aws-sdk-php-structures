<?php

namespace Sunaoka\Aws\Structures\Schemas\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Policy
 * @property string $RegistryName
 * @property string $RevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: string,
     *     RegistryName?: string,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
