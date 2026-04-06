<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property list<Shapes\Tag>|null $tags
 * @property string $vpcId
 */
class CreateNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     securityGroupIds: list<string>,
     *     subnetIds: list<string>,
     *     tags?: list<Shapes\Tag>|null,
     *     vpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
