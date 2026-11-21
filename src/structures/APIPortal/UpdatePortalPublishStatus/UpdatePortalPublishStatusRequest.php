<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortalPublishStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property 'PUBLISHED'|'DISABLED' $status
 * @property string|null $description
 */
class UpdatePortalPublishStatusRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     status: 'PUBLISHED'|'DISABLED',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
