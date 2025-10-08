<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomainLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $LayoutDefinitionName
 * @property string $Description
 * @property string $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER' $LayoutType
 * @property string $Layout
 * @property array<string, string>|null $Tags
 */
class CreateDomainLayoutRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     LayoutDefinitionName: string,
     *     Description: string,
     *     DisplayName: string,
     *     IsDefault?: bool|null,
     *     LayoutType: 'PROFILE_EXPLORER',
     *     Layout: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
