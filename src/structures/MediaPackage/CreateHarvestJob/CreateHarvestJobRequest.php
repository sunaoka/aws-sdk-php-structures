<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateHarvestJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndTime
 * @property string $Id
 * @property string $OriginEndpointId
 * @property Shapes\S3Destination $S3Destination
 * @property string $StartTime
 */
class CreateHarvestJobRequest extends Request
{
    /**
     * @param array{
     *     EndTime: string,
     *     Id: string,
     *     OriginEndpointId: string,
     *     S3Destination: Shapes\S3Destination,
     *     StartTime: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
