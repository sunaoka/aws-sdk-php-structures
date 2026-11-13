<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteSubdomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subdomainName
 * @property string|null $arn
 * @property string|null $fqdn
 * @property int|null $depth
 * @property 'CREATING'|'CREATE_FAILED'|'UNATTACHED'|'ATTACHING'|'ATTACHED'|'DETACHING'|'TRANSFERRING'|'IMPLICIT'|null $state
 * @property SubdomainAttachableResource|null $attachedResource
 * @property SubdomainAttachableResource|null $attachingResource
 * @property ResourceLocation|null $location
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $parentFqdn
 * @property list<Subdomain>|null $children
 * @property list<Tag>|null $tags
 */
class Subdomain extends Shape
{
    /**
     * @param array{
     *     subdomainName?: string|null,
     *     arn?: string|null,
     *     fqdn?: string|null,
     *     depth?: int|null,
     *     state?: 'CREATING'|'CREATE_FAILED'|'UNATTACHED'|'ATTACHING'|'ATTACHED'|'DETACHING'|'TRANSFERRING'|'IMPLICIT'|null,
     *     attachedResource?: SubdomainAttachableResource|null,
     *     attachingResource?: SubdomainAttachableResource|null,
     *     location?: ResourceLocation|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     parentFqdn?: string|null,
     *     children?: list<Subdomain>|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
