<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteAccessControlRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 */
class DeleteAccessControlRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
