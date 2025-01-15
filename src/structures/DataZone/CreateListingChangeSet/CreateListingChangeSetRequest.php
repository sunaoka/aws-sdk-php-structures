<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateListingChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PUBLISH'|'UNPUBLISH' $action
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property string|null $entityRevision
 * @property 'ASSET'|'DATA_PRODUCT' $entityType
 */
class CreateListingChangeSetRequest extends Request
{
    /**
     * @param array{
     *     action: 'PUBLISH'|'UNPUBLISH',
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityRevision?: string|null,
     *     entityType: 'ASSET'|'DATA_PRODUCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
