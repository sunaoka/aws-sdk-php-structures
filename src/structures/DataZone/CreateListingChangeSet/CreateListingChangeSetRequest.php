<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateListingChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PUBLISH'|'UNPUBLISH' $action
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property string $entityRevision
 * @property 'ASSET'|'DATA_PRODUCT' $entityType
 */
class CreateListingChangeSetRequest extends Request
{
    /**
     * @param array{
     *     action: 'PUBLISH'|'UNPUBLISH',
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityRevision?: string,
     *     entityType: 'ASSET'|'DATA_PRODUCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
