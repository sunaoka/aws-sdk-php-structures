<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteDomainLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $LayoutDefinitionName
 */
class DeleteDomainLayoutRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     LayoutDefinitionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
