<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property string|null $clientToken
 * @property string|null $customerManagedKey
 * @property string|null $displayName
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     clientToken?: string|null,
     *     customerManagedKey?: string|null,
     *     displayName?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
