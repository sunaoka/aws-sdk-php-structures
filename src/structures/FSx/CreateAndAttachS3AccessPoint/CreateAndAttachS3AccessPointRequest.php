<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $Name
 * @property 'OPENZFS' $Type
 * @property Shapes\CreateAndAttachS3AccessPointOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property Shapes\CreateAndAttachS3AccessPointS3Configuration|null $S3AccessPoint
 */
class CreateAndAttachS3AccessPointRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Name: string,
     *     Type: 'OPENZFS',
     *     OpenZFSConfiguration?: Shapes\CreateAndAttachS3AccessPointOpenZFSConfiguration|null,
     *     S3AccessPoint?: Shapes\CreateAndAttachS3AccessPointS3Configuration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
