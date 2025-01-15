<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreImageFromRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool|null $DryRun
 */
class RestoreImageFromRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
