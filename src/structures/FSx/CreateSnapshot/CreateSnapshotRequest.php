<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $Name
 * @property string $VolumeId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Name: string,
     *     VolumeId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
