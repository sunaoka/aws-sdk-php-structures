<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteTrust;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustId
 * @property bool $DeleteAssociatedConditionalForwarder
 */
class DeleteTrustRequest extends Request
{
    /**
     * @param array{
     *     TrustId: string,
     *     DeleteAssociatedConditionalForwarder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
