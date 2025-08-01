<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ipAccessSettingsArn
 * @property string|null $displayName
 * @property string|null $description
 * @property list<Shapes\IpRule>|null $ipRules
 * @property string|null $clientToken
 */
class UpdateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     ipAccessSettingsArn: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     ipRules?: list<Shapes\IpRule>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
