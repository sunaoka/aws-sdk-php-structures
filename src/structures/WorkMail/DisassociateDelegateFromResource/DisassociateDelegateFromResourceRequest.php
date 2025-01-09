<?php

namespace Sunaoka\Aws\Structures\WorkMail\DisassociateDelegateFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ResourceId
 * @property string $EntityId
 */
class DisassociateDelegateFromResourceRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ResourceId: string,
     *     EntityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
