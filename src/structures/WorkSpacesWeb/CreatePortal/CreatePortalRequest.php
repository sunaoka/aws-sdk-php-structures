<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $displayName
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string|null $clientToken
 * @property 'Standard'|'IAM_Identity_Center'|null $authenticationType
 * @property 'standard.regular'|'standard.large'|'standard.xlarge'|null $instanceType
 * @property int<1, 5000>|null $maxConcurrentSessions
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     clientToken?: string|null,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center'|null,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge'|null,
     *     maxConcurrentSessions?: int<1, 5000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
