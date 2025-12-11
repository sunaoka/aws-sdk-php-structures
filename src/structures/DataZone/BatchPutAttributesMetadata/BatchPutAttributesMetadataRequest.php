<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AttributeInput> $attributes
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 */
class BatchPutAttributesMetadataRequest extends Request
{
    /**
     * @param array{
     *     attributes: list<Shapes\AttributeInput>,
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
