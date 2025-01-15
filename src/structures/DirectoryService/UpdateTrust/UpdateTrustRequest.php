<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateTrust;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustId
 * @property 'Enabled'|'Disabled'|null $SelectiveAuth
 */
class UpdateTrustRequest extends Request
{
    /**
     * @param array{
     *     TrustId: string,
     *     SelectiveAuth?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
