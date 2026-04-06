<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchGetAttributesMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $entityIdentifier
 * @property string|null $entityRevision
 * @property list<string> $attributeIdentifiers
 */
class BatchGetAttributesMetadataRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     entityIdentifier: string,
     *     entityRevision?: string|null,
     *     attributeIdentifiers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
