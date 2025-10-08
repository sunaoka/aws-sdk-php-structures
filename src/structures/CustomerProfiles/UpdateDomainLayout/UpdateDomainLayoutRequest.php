<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomainLayout;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $LayoutDefinitionName
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property bool|null $IsDefault
 * @property 'PROFILE_EXPLORER'|null $LayoutType
 * @property string|null $Layout
 */
class UpdateDomainLayoutRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     LayoutDefinitionName: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     IsDefault?: bool|null,
     *     LayoutType?: 'PROFILE_EXPLORER'|null,
     *     Layout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
