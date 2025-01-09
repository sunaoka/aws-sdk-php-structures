<?php

namespace Sunaoka\Aws\Structures\MediaPackage\RotateIngestEndpointCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IngestEndpointId
 */
class RotateIngestEndpointCredentialsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IngestEndpointId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
