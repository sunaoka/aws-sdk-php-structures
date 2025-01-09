<?php

namespace Sunaoka\Aws\Structures\finspace\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $samlMetadataDocument
 * @property string $samlMetadataURL
 * @property string $applicationCallBackURL
 * @property string $federationURN
 * @property string $federationProviderName
 * @property array<string, string> $attributeMap
 */
class FederationParameters extends Shape
{
    /**
     * @param array{
     *     samlMetadataDocument?: string,
     *     samlMetadataURL?: string,
     *     applicationCallBackURL?: string,
     *     federationURN?: string,
     *     federationProviderName?: string,
     *     attributeMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
