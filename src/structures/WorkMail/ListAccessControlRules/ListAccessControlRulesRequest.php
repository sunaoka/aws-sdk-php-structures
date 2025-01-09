<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAccessControlRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class ListAccessControlRulesRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
