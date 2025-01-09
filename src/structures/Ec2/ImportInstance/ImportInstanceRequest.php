<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Description
 * @property Shapes\ImportInstanceLaunchSpecification $LaunchSpecification
 * @property list<Shapes\DiskImage> $DiskImages
 * @property 'Windows' $Platform
 */
class ImportInstanceRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Description?: string,
     *     LaunchSpecification?: Shapes\ImportInstanceLaunchSpecification,
     *     DiskImages?: list<Shapes\DiskImage>,
     *     Platform: 'Windows'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
