<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $Description
 * @property Shapes\ImportInstanceLaunchSpecification|null $LaunchSpecification
 * @property list<Shapes\DiskImage>|null $DiskImages
 * @property 'Windows' $Platform
 */
class ImportInstanceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Description?: string|null,
     *     LaunchSpecification?: Shapes\ImportInstanceLaunchSpecification|null,
     *     DiskImages?: list<Shapes\DiskImage>|null,
     *     Platform: 'Windows'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
