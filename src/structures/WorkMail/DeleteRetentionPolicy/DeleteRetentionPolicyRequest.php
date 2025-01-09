<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Id
 */
class DeleteRetentionPolicyRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
