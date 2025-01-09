<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $displayName
 * @property string $ipAccessSettingsArn
 * @property list<Shapes\IpRule> $ipRules
 */
class UpdateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     displayName?: string,
     *     ipAccessSettingsArn: string,
     *     ipRules?: list<Shapes\IpRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
