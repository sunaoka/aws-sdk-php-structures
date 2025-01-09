<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $Name
 * @property string $VolumeId
 * @property list<Shapes\Tag> $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     Name: string,
     *     VolumeId: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
