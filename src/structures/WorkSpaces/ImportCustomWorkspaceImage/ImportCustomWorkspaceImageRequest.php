<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportCustomWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $ImageDescription
 * @property 'BASE'|'GRAPHICS_G4DN' $ComputeType
 * @property 'PCOIP'|'DCV'|'BYOP' $Protocol
 * @property Shapes\ImageSourceIdentifier $ImageSource
 * @property string $InfrastructureConfigurationArn
 * @property 'WINDOWS' $Platform
 * @property 'Windows_10'|'Windows_11' $OsVersion
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportCustomWorkspaceImageRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     ImageDescription: string,
     *     ComputeType: 'BASE'|'GRAPHICS_G4DN',
     *     Protocol: 'PCOIP'|'DCV'|'BYOP',
     *     ImageSource: Shapes\ImageSourceIdentifier,
     *     InfrastructureConfigurationArn: string,
     *     Platform: 'WINDOWS',
     *     OsVersion: 'Windows_10'|'Windows_11',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
