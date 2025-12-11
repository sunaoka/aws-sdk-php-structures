<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteDomainObjectType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 */
class DeleteDomainObjectTypeRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
