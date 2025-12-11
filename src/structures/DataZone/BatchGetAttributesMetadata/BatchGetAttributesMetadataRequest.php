<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchGetAttributesMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $attributeIdentifiers
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property string|null $entityRevision
 * @property 'ASSET'|'LISTING' $entityType
 */
class BatchGetAttributesMetadataRequest extends Request
{
    /**
     * @param array{
     *     attributeIdentifiers: list<string>,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityRevision?: string|null,
     *     entityType: 'ASSET'|'LISTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
