<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineCustomDocumentEnrichmentConfiguration> $InlineConfigurations
 * @property HookConfiguration $PreExtractionHookConfiguration
 * @property HookConfiguration $PostExtractionHookConfiguration
 * @property string $RoleArn
 */
class CustomDocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     InlineConfigurations?: list<InlineCustomDocumentEnrichmentConfiguration>,
     *     PreExtractionHookConfiguration?: HookConfiguration,
     *     PostExtractionHookConfiguration?: HookConfiguration,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
