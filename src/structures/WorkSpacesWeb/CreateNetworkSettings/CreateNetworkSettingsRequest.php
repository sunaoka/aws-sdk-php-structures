<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
