<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateListingChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'DATA_PRODUCT' $entityType
 * @property string|null $entityRevision
 * @property 'PUBLISH'|'UNPUBLISH' $action
 * @property string|null $clientToken
 */
class CreateListingChangeSetRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'DATA_PRODUCT',
     *     entityRevision?: string|null,
     *     action: 'PUBLISH'|'UNPUBLISH',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
