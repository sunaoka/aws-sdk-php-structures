<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ec2ImageId
 * @property 'BYOL_REGULAR'|'BYOL_GRAPHICS'|'BYOL_GRAPHICSPRO'|'BYOL_GRAPHICS_G4DN'|'BYOL_REGULAR_WSP'|'BYOL_GRAPHICS_G4DN_WSP'|'BYOL_REGULAR_BYOP'|'BYOL_GRAPHICS_G4DN_BYOP' $IngestionProcess
 * @property string $ImageName
 * @property string $ImageDescription
 * @property list<Shapes\Tag> $Tags
 * @property list<'Microsoft_Office_2016'|'Microsoft_Office_2019'> $Applications
 */
class ImportWorkspaceImageRequest extends Request
{
    /**
     * @param array{
     *     Ec2ImageId: string,
     *     IngestionProcess: 'BYOL_REGULAR'|'BYOL_GRAPHICS'|'BYOL_GRAPHICSPRO'|'BYOL_GRAPHICS_G4DN'|'BYOL_REGULAR_WSP'|'BYOL_GRAPHICS_G4DN_WSP'|'BYOL_REGULAR_BYOP'|'BYOL_GRAPHICS_G4DN_BYOP',
     *     ImageName: string,
     *     ImageDescription: string,
     *     Tags?: list<Shapes\Tag>,
     *     Applications?: list<'Microsoft_Office_2016'|'Microsoft_Office_2019'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
