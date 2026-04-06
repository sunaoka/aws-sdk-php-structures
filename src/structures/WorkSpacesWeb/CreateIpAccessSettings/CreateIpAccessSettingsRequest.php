<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string|null $clientToken
 * @property string|null $customerManagedKey
 * @property string|null $description
 * @property string|null $displayName
 * @property list<Shapes\IpRule> $ipRules
 * @property list<Shapes\Tag>|null $tags
 */
class CreateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     clientToken?: string|null,
     *     customerManagedKey?: string|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     ipRules: list<Shapes\IpRule>,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
