<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIpAccessSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property string $clientToken
 * @property string $customerManagedKey
 * @property string $description
 * @property string $displayName
 * @property list<Shapes\IpRule> $ipRules
 * @property list<Shapes\Tag> $tags
 */
class CreateIpAccessSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     clientToken?: string,
     *     customerManagedKey?: string,
     *     description?: string,
     *     displayName?: string,
     *     ipRules: list<Shapes\IpRule>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
