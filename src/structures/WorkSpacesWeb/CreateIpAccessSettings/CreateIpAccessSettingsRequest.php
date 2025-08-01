<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<Shapes\IpRule> $ipRules
 * @property string|null $clientToken
 */
class CreateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     ipRules: list<Shapes\IpRule>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
