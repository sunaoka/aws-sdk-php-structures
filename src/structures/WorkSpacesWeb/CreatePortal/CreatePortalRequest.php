<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property 'Standard'|'IAM_Identity_Center' $authenticationType
 * @property string $clientToken
 * @property string $customerManagedKey
 * @property string $displayName
 * @property 'standard.regular'|'standard.large'|'standard.xlarge' $instanceType
 * @property int $maxConcurrentSessions
 * @property list<Shapes\Tag> $tags
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     authenticationType?: 'Standard'|'IAM_Identity_Center',
     *     clientToken?: string,
     *     customerManagedKey?: string,
     *     displayName?: string,
     *     instanceType?: 'standard.regular'|'standard.large'|'standard.xlarge',
     *     maxConcurrentSessions?: int,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
