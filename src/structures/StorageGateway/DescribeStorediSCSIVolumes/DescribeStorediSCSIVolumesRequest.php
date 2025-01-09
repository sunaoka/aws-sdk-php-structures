<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeStorediSCSIVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VolumeARNs
 */
class DescribeStorediSCSIVolumesRequest extends Request
{
    /**
     * @param array{VolumeARNs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
