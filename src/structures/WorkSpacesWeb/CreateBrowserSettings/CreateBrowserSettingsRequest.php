<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string $browserPolicy
 * @property string|null $clientToken
 */
class CreateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     tags?: list<Shapes\Tag>|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     browserPolicy: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
