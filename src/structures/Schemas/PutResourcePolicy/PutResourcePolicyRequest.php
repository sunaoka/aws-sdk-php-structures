<?php

namespace Sunaoka\Aws\Structures\Schemas\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Policy
 * @property string|null $RegistryName
 * @property string|null $RevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: string,
     *     RegistryName?: string|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
