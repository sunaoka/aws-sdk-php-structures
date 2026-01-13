<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $entityIdentifier
 * @property string|null $clientToken
 * @property list<Shapes\AttributeInput> $attributes
 */
class BatchPutAttributesMetadataRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     entityIdentifier: string,
     *     clientToken?: string|null,
     *     attributes: list<Shapes\AttributeInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
