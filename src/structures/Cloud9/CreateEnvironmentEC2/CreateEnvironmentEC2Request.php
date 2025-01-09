<?php

namespace Sunaoka\Aws\Structures\Cloud9\CreateEnvironmentEC2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $clientRequestToken
 * @property string $instanceType
 * @property string $subnetId
 * @property string $imageId
 * @property int $automaticStopTimeMinutes
 * @property string $ownerArn
 * @property list<Shapes\Tag> $tags
 * @property 'CONNECT_SSH'|'CONNECT_SSM' $connectionType
 * @property bool $dryRun
 */
class CreateEnvironmentEC2Request extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     clientRequestToken?: string,
     *     instanceType: string,
     *     subnetId?: string,
     *     imageId: string,
     *     automaticStopTimeMinutes?: int,
     *     ownerArn?: string,
     *     tags?: list<Shapes\Tag>,
     *     connectionType?: 'CONNECT_SSH'|'CONNECT_SSM',
     *     dryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
