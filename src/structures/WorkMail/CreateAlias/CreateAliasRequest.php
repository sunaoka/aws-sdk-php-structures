<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $EntityId
 * @property string $Alias
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     EntityId: string,
     *     Alias: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
