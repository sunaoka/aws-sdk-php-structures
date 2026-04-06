<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property list<Shapes\DiskImage>|null $DiskImages
 * @property bool|null $DryRun
 * @property Shapes\ImportInstanceLaunchSpecification|null $LaunchSpecification
 * @property 'Windows' $Platform
 */
class ImportInstanceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DiskImages?: list<Shapes\DiskImage>|null,
     *     DryRun?: bool|null,
     *     LaunchSpecification?: Shapes\ImportInstanceLaunchSpecification|null,
     *     Platform: 'Windows'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
