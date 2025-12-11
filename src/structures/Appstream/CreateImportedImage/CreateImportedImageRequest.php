<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImportedImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $SourceAmiId
 * @property string $IamRoleArn
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property array<string, string>|null $Tags
 * @property Shapes\RuntimeValidationConfig|null $RuntimeValidationConfig
 * @property 'CURRENT_LATEST'|'ALWAYS_LATEST'|null $AgentSoftwareVersion
 * @property list<Shapes\ApplicationConfig>|null $AppCatalogConfig
 * @property bool|null $DryRun
 */
class CreateImportedImageRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SourceAmiId: string,
     *     IamRoleArn: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     Tags?: array<string, string>|null,
     *     RuntimeValidationConfig?: Shapes\RuntimeValidationConfig|null,
     *     AgentSoftwareVersion?: 'CURRENT_LATEST'|'ALWAYS_LATEST'|null,
     *     AppCatalogConfig?: list<Shapes\ApplicationConfig>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
