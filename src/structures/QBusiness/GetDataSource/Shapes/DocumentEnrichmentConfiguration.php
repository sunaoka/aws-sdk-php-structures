<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InlineDocumentEnrichmentConfiguration> $inlineConfigurations
 * @property HookConfiguration $preExtractionHookConfiguration
 * @property HookConfiguration $postExtractionHookConfiguration
 */
class DocumentEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     inlineConfigurations?: list<InlineDocumentEnrichmentConfiguration>,
     *     preExtractionHookConfiguration?: HookConfiguration,
     *     postExtractionHookConfiguration?: HookConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
