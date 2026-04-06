<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $displayName
 * @property string $ipAccessSettingsArn
 * @property list<Shapes\IpRule>|null $ipRules
 */
class UpdateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     ipAccessSettingsArn: string,
     *     ipRules?: list<Shapes\IpRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
