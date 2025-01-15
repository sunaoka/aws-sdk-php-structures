<?php

namespace Sunaoka\Aws\Structures\finspace\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $samlMetadataDocument
 * @property string|null $samlMetadataURL
 * @property string|null $applicationCallBackURL
 * @property string|null $federationURN
 * @property string|null $federationProviderName
 * @property array<string, string>|null $attributeMap
 */
class FederationParameters extends Shape
{
    /**
     * @param array{
     *     samlMetadataDocument?: string|null,
     *     samlMetadataURL?: string|null,
     *     applicationCallBackURL?: string|null,
     *     federationURN?: string|null,
     *     federationProviderName?: string|null,
     *     attributeMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
