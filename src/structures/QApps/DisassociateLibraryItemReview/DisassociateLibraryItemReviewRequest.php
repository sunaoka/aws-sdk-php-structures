<?php

namespace Sunaoka\Aws\Structures\QApps\DisassociateLibraryItemReview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $libraryItemId
 */
class DisassociateLibraryItemReviewRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     libraryItemId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
