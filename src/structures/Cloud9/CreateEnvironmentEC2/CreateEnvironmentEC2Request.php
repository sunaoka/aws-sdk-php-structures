<?php

namespace Sunaoka\Aws\Structures\Cloud9\CreateEnvironmentEC2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $clientRequestToken
 * @property string $instanceType
 * @property string|null $subnetId
 * @property string $imageId
 * @property int<0, 20160>|null $automaticStopTimeMinutes
 * @property string|null $ownerArn
 * @property list<Shapes\Tag>|null $tags
 * @property 'CONNECT_SSH'|'CONNECT_SSM'|null $connectionType
 * @property bool|null $dryRun
 */
class CreateEnvironmentEC2Request extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     clientRequestToken?: string|null,
     *     instanceType: string,
     *     subnetId?: string|null,
     *     imageId: string,
     *     automaticStopTimeMinutes?: int<0, 20160>|null,
     *     ownerArn?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     connectionType?: 'CONNECT_SSH'|'CONNECT_SSM'|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
