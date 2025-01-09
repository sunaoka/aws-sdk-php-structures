<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VolumeARNs
 */
class DescribeCachediSCSIVolumesRequest extends Request
{
    /**
     * @param array{VolumeARNs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
