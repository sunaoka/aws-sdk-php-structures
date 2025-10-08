<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomainLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $LayoutDefinitionName
 */
class GetDomainLayoutRequest extends Request
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
