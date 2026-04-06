<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects;

class IoT1ClickProjectsClient extends \Aws\IoT1ClickProjects\IoT1ClickProjectsClient
{
    use AssociateDeviceWithPlacement\AssociateDeviceWithPlacementTrait;
    use CreatePlacement\CreatePlacementTrait;
    use CreateProject\CreateProjectTrait;
    use DeletePlacement\DeletePlacementTrait;
    use DeleteProject\DeleteProjectTrait;
    use DescribePlacement\DescribePlacementTrait;
    use DescribeProject\DescribeProjectTrait;
    use DisassociateDeviceFromPlacement\DisassociateDeviceFromPlacementTrait;
    use GetDevicesInPlacement\GetDevicesInPlacementTrait;
    use ListPlacements\ListPlacementsTrait;
    use ListProjects\ListProjectsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePlacement\UpdatePlacementTrait;
    use UpdateProject\UpdateProjectTrait;
}
