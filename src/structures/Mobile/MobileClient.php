<?php

namespace Sunaoka\Aws\Structures\Mobile;

class MobileClient extends \Aws\Mobile\MobileClient
{
    use CreateProject\CreateProjectTrait;
    use DeleteProject\DeleteProjectTrait;
    use DescribeBundle\DescribeBundleTrait;
    use DescribeProject\DescribeProjectTrait;
    use ExportBundle\ExportBundleTrait;
    use ExportProject\ExportProjectTrait;
    use ListBundles\ListBundlesTrait;
    use ListProjects\ListProjectsTrait;
    use UpdateProject\UpdateProjectTrait;
}
