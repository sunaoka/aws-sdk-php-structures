<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string $browserPolicy
 * @property string|null $clientToken
 * @property string|null $customerManagedKey
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     browserPolicy: string,
     *     clientToken?: string|null,
     *     customerManagedKey?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
